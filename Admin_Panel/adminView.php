<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registration Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
<nav class=" navbar navbar-expand-lg text-light bg-dark">
  <div class=" container-fluid">
    <a class="navbar-brand text-light" href="#"><h4>Admin Panel</h4></a>
    <!-- <a href="registrationForm.php"><button type="button" class="btn btn-primary btn-lg">+Add User</button></a> -->
  </div>
</nav>
<div class="alert alert-success my-2" role="alert">
 Welcome Admin!    You have successfully logged in!
</div>

<div class="container-fluid ">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800 ">Users</h1>
    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Users Details</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form name="assignto" method="post">
                                  <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                    <thead>
                                      <tr>
                                        <th rowspan="1" colspan="1">ID</th>
                                        <th rowspan="1" colspan="1">First Name</th>
                                        <th rowspan="1" colspan="1">Last Name</th>
                                        <th rowspan="1" colspan="1">Email Id</th>
                                        <th rowspan="1" colspan="1">Date Of Birth</th>
                                        <th rowspan="1" colspan="1">Mobile Number</th>
                                        <th rowspan="1" colspan="1">Gender</th>
                                        <th rowspan="1" colspan="1">Edit</th>
                                        <th rowspan="1" colspan="1">Delete</th>
                                      </tr>
                                  </tbody>
                                     </form>
                            </div>
                        </div>
                    </div>

                </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"></script>
</body>
</html>