<?php
// Include the database connection from config.php
require_once './db/config.php';
print_r($_POST);
// Echo necessary scripts for jQuery and SweetAlert
echo '<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>';
echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';

// Start the session
session_start();

function insertFraudReport($postData) {
    global $pdo;

    // Ensure the user is logged in and has a user_id
    if (!isset($_SESSION['user_id'])) {
        echo '<script type="text/javascript">
                $(document).ready(function() {
                    Swal.fire({
                        icon: "error",
                        title: "Error",
                        text: "You must be logged in to submit a report!",
                        confirmButtonText: "Go to Login"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.history.back(); // Redirects back to the previous page
                        }
                    });
                });
              </script>';
        return;
    }

    // Get the table name from the hidden input
    $tableName = $postData['table_name'];

    // Get the user_id from the session
    $user_id = $_SESSION['user_id'];

    // Remove 'submit' and 'table_name' as they are not relevant for the database
    unset($postData['submit']);
    unset($postData['table_name']);

    // Prepare the dynamic SQL query based on $_POST keys
    $fields = array_keys($postData);
    $placeholders = array_map(function($field) {
        return ':' . $field;
    }, $fields);

    // Add 'user_id' as a foreign key field
    $fields[] = 'user_id';
    $placeholders[] = ':user_id';

    // Construct the SQL query dynamically with the table name
    $sql = "INSERT INTO $tableName (" . implode(', ', $fields) . ") 
            VALUES (" . implode(', ', $placeholders) . ")";

    $stmt = $pdo->prepare($sql);

    // Bind parameters dynamically using the values from $_POST
    foreach ($postData as $field => $value) {
        $stmt->bindValue(':' . $field, $value);
    }

    // Bind the user_id parameter
    $stmt->bindValue(':user_id', $user_id);

    // Execute the statement
    if ($stmt->execute()) {
        // Redirect to another page on success
        header("Location: success_page.php");
        exit(); // Make sure to stop script execution after redirection
    } else {
        echo '<script type="text/javascript">
                $(document).ready(function() {
                    Swal.fire({
                        icon: "error",
                        title: "Error",
                        text: "There was a problem submitting your report."
                    });
                });
              </script>';
    }
}

// Example usage
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    insertFraudReport($_POST);
}
?>
