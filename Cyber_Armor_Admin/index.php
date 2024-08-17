<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cyber Armor</title>
  <link href="../assets/images/white-logo.png" type="image/x-icon" rel="icon" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <!-- SweetAlert CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="./plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <h1><b>Cyber</b>Armor</h1>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Login to start your session</p>
      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block" name="btnlogin">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->
<!-- jQuery -->
<!-- <script src="./plugins/jquery/jquery.min.js"></script> -->
<!-- Bootstrap 4 -->
<script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./dist/js/adminlte.min.js"></script>
</body>
</html>
<?php
session_start();
include('../db/config.php');

// Function to validate MAC address (if needed)
function validateMAC($allowedMACs, $userMAC) {
    $userMAC = strtolower(preg_replace('/[^a-f0-9]/', '', $userMAC));
    foreach ($allowedMACs as $allowedMAC) {
        $allowedMAC = strtolower(preg_replace('/[^a-f0-9]/', '', $allowedMAC));
        if ($userMAC === $allowedMAC) {
            return true;
        }
    }
    return false;
}

$allowedMACs = ['::1']; // Example MACs
$userMAC = $_SERVER['REMOTE_ADDR'];

// Validate MAC address
if (!validateMAC($allowedMACs, $userMAC)) {
    die('Access denied. MAC address not authorized.');
}

// Define login limits and block duration
$max_attempts = 3;
$block_duration = 5; // Duration in seconds

// Check if user is currently blocked
if (isset($_SESSION['block_time']) && time() < $_SESSION['block_time']) {
    $time_left = $_SESSION['block_time'] - time();
    echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Too many login attempts!',
                text: 'Please try again in $time_left seconds.',
                timer: 5000
            });
          </script>";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'] ?? '';
    $temp_password = $_POST['password'] ?? '';
    $password = hash('sha256', $temp_password);

    // Prepare and execute the query
    $stmt = $pdo->prepare('SELECT email, password_hash FROM admin_login WHERE email = :email');
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);

    try {
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Database error!',
                    text: 'Database query failed: " . addslashes($e->getMessage()) . "',
                    timer: 5000
                });
              </script>";
        exit;
    }

    if ($result === false) {
        // Email does not exist or query failed
        echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Invalid email or password!',
                    text: 'Please try again.',
                    timer: 5000
                });
              </script>";
        
        // Increment login attempts
        $_SESSION['login_attempts'] = isset($_SESSION['login_attempts']) ? $_SESSION['login_attempts'] + 1 : 1;

        // Check if login attempts exceed the maximum
        if ($_SESSION['login_attempts'] >= $max_attempts) {
            $_SESSION['block_time'] = time() + $block_duration;

            echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Too many login attempts!',
                        text: 'Please try again in $block_duration seconds.',
                        timer: 5000
                    });
                  </script>";
            exit;
        }

        exit;
    }

    $password_new = $result['password_hash'] ?? null;

    // Check if the password is correct
    if ($password == $password_new) {
        // Successful login
        $_SESSION['authenticated'] = true;
        $_SESSION['client_ip'] = $_SERVER['REMOTE_ADDR'];
        $_SESSION['user_agent'] = $_SERVER['HTTP_USER_AGENT'];

        unset($_SESSION['login_attempts']);
        session_regenerate_id(true);

        header('Location: dashboard.php');
        exit;
    } else {
        // Incorrect password
        echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Invalid email or password!',
                    text: 'Please try again.',
                    timer: 5000
                });
              </script>";

        // Increment login attempts
        $_SESSION['login_attempts'] = isset($_SESSION['login_attempts']) ? $_SESSION['login_attempts'] + 1 : 1;

        // Check if login attempts exceed the maximum
        if ($_SESSION['login_attempts'] >= $max_attempts) {
            $_SESSION['block_time'] = time() + $block_duration;

            echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Too many login attempts!',
                        text: 'Please try again in $block_duration seconds.',
                        timer: 5000
                    });
                  </script>";
            exit;
        }

        exit;
    }
}
?>
