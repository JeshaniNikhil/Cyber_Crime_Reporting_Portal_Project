<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cyber Armor</title>
  <link href="../assets/images/white-logo.png" type="image/x-icon" rel="icon" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
   <?php  include "sidebar.php"; ?>
    <div class="modal fade" id="userDataModal" tabindex="-1" aria-labelledby="userAddEditModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="userModalLabel">Add New User</h1>
            <button type="button" class="btn-close close" data-bs-dismiss="modal" aria-label="Close"> <span
                aria-hidden="true">&times;</span></button>
          </div>
          <form name="userDataFrm" id="userDataFrm">
            <div class="modal-body">
              <div class="frm-status"></div>
              <div class="mb-3">
                <label for="userFirstName" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Name">
              </div>
              <div class="mb-3">
                <label for="userEmail" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email">
              </div>
              <div class="mb-3">
                <label for="requirements" class="form-label">Requirements Details</label>
                <input type="text" class="form-control" id="requirements" placeholder="Requirements">
              </div>
              <div class="mb-3">
                <label for="app_name" class="form-label">App Name</label>
                <input type="text" class="form-control" id="app_name" placeholder="App Name">
              </div>
              <div class="mb-3">
                <label for="testing_type" class="form-label"
                  >Type of Testing Required</label
                ><br />
                <div class="form-check form-check-inline">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="functionalTesting"
                    value="Functional Testing"
                  />
                  <label class="form-check-label" for="functionalTesting"
                    >Automated Testing</label
                  >
                </div>
                <div class="form-check form-check-inline">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="usabilityTesting"
                    value="Usability Testing"
                  />
                  <label class="form-check-label" for="usabilityTesting"
                    >Usability Testing</label
                  >
                </div>
                <div class="form-check form-check-inline">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="performanceTesting"
                    value="Performance Testing"
                  />
                  <label class="form-check-label" for="performanceTesting"
                    >Performance Testing</label
                  >
                </div>
                <div class="form-check form-check-inline">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="securityTesting"
                    value="Security Testing"
                  />
                  <label class="form-check-label" for="securityTesting"
                    >Security Testing</label
                  >
                </div>
                <div class="form-check form-check-inline">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="securityTesting"
                    value="Security Testing"
                  />
                  <label class="form-check-label" for="securityTesting"
                    >Compatibility Testing</label
                  >
                </div>
                <div class="form-check form-check-inline">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="compactibility_testing"
                    value="Compatibility Testing"
                  />
                </div>
                
                <div class="form-check form-check-inline">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="manual_testing"
                    value="Manual Testing"
                  />
                  <label class="form-check-label" for="securityTesting"
                    >Manual Testing</label
                  >
                </div>
                <div class="form-check form-check-inline">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="other_type_of_testing"
                    value="Other Type Of Testing"
                  />
                  <label class="form-check-label" for="securityTesting"
                    >Other Type Of Testing</label
                  >
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <input type="hidden" id="userID" value="0">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" onclick="submitUserData()">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="modal fade" id="updateuserstatus" tabindex="-1" aria-labelledby="updatestatusLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="updatestatus">Update Request Status</h1>
            <button type="button" class="btn-close close" data-bs-dismiss="modal" aria-label="Close"> <span
                aria-hidden="true">&times;</span></button>
          </div>
          <form name="updatestatusform" id="updatestatusform" type="post">
            <div class="modal-body">
              <div class="frm-status"></div>
              <div class="mb-3">
                <label for="domain" class="form-label">Status Names</label>
                <select name="status" id="status" class="form-control">
                  <option disabled selected>Select Status</option>
                  <option value="Pending">Pending</option>
                  <option value="In Progress">In Progress</option>
                  <option value="Completed">Completed</option>
                  <option value="Cancelled">Cancelled</option>
                  <option value="Awaiting Information">Awaiting Information</option>
                </select>
              </div>
            </div>
            <div class="modal-footer">
              <!-- <input type="hidden" name="userID" id="userID" value="0"> -->
              <input type="hidden" id="updateID" name="updateID">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <div class="row">
                <h1>App Testing Requests Detail</h1>
                <a href="javascript:void(0);" class="p-1" onclick="addData()"><svg xmlns="http://www.w3.org/2000/svg"
                    width="25" height="25" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                    <path
                      d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z" />
                  </svg></a>
              </div>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Service Requests</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">App Testing Requests</h3>
          </div>
          <div class="card-body">
            <div class="top-panel">

            </div>

            <!-- Data list table -->
            <table id="dataList" class="display table-responsive" style="width:100%">
              <thead>
                <tr>
                  <th>request id</th>
                  <th>name</th>
                  <th>email</th>
                  <th>App Name</th>
                  <th>requirements</th>
                  <th>testing_type</th>
                  <th>status</th>
                  <th>Update status</th>
                  <th>Action</th>
                </tr>
              </thead>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2024 Cyber Armor.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />
  <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
  <!-- Bootstrap 4 -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <script>
    var table = $('#dataList').DataTable({
      "processing": true,
      "serverSide": true,
      "ajax": "fetchAppData.php",
      "columnDefs": [
        { "orderable": false, "targets": 6 }
      ]
    });
    $(document).ready(function () {
      table.draw();
      $("#updatestatusform").submit(function (e) {
        e.preventDefault();
        $.ajax({
          type: "POST",
          contentType: false,
          dataType: "json",
          url: "update_app_status.php",
          data: new FormData(this),
          processData: false,
          cache: false,
          success: function (data) {
            if (data.message) {
              table.draw();
              $("#updatestatusform")[0].reset();
              Swal.fire({
                title: "Updated",
                text: "Status Updated",
                icon: "success"
              });
            }
            else {
              Swal.fire({
                title: "Error",
                text: "Status Not Updated",
                icon: "error"
                });
            }
            $('#updateuserstatus').modal('hide');
          }
        })
      })
    });
    function addData() {
      $('.frm-status').html('');
      $('#userModalLabel').html('Add New User');
      $('#name').val('');
      $('#email').val('');
      $('#app_name').val('');
      $('#requirements').val('');
      $('#userID').val(0);
      $('#userDataModal').modal('show');
    }
    function updatestatus(user_data) {
      console.log(user_data);
      $('#updateuserstatus').modal('show');
      $('#updateID').val(user_data.request_id);
    }
    function editData(user_data) {
      $('.frm-status').html('');
      $('#userModalLabel').html('Edit User #' + user_data.request_id);
      $('#name').val(user_data.name);
      $('#email').val(user_data.email);
      $('#app_name').val(user_data.app_name);
      $('#requirements').val(user_data.requirements);
      $("input[type='checkbox']").prop('checked', false);
      if (user_data.testing_type) {

        var testingTypesArray = Array.isArray(user_data.testing_type) ? user_data.testing_type : user_data.testing_type.split(',');

        testingTypesArray.forEach(function (type) {
          $("input[type='checkbox'][value='" + type.trim() + "']").prop('checked', true);
        });
      }
      $('#userID').val(user_data.request_id);
      $('#userDataModal').modal('show');
    }

    function submitUserData() {
      $('.frm-status').html('');
      let input_data_arr = [
        document.getElementById('name').value,
        document.getElementById('email').value,
        document.getElementById('app_name').value,
        document.getElementById('requirements').value,
        document.getElementById('userID').value,
      ];
      let testingTypes = [];
      $("input[type='checkbox']:checked").each(function () {
        testingTypes.push($(this).val());
      });
      input_data_arr.push(testingTypes);
      fetch("eventAppHandler.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ request_type: 'addEditUser', user_data: input_data_arr }),
      })
        .then(response => response.json())
        .then(data => {
          if (data.status == 1) {
            Swal.fire({
              title: data.msg,
              icon: 'success',
            }).then((result) => {

              table.draw();
              $('#userDataModal').modal('hide');
              $("#userDataFrm")[0].reset();
            });
          } else {
            $('.frm-status').html('<div class="alert alert-danger" role="alert">' + data.error + '</div>');
          }
        })
        .catch(console.error);
    }

    function deleteData(user_id) {
      Swal.fire({
        title: 'Are you sure to Delete?',
        text: 'You won\'t be able to revert this!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          // Delete event
          fetch("eventAppHandler.php", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ request_type: 'deleteUser', user_id: user_id }),
          })
            .then(response => response.json())
            .then(data => {
              if (data.status == 1) {
                Swal.fire({
                  title: data.msg,
                  icon: 'success',
                }).then((result) => {
                  table.draw();
                });
              } else {
                Swal.fire(data.error, '', 'error');
              }
            })
            .catch(console.error);
        } else {
          Swal.close();
        }
      });
    }
  </script>
</body>

</html>