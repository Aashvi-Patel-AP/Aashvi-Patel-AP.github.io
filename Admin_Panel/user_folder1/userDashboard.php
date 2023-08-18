<?php
$serverName= "localhost";
$hostName = "root";
$password= "";
$dbname="admin_panel";

$con = mysqli_connect($serverName,$hostName,$password,$dbname);
if(!$con){
//   die("Could not connect: ".mysqli_connect_error());
}
// else{
//     echo "Database Connected successfully";
// }
$sql="SELECT * FROM users"; 
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
while($row=mysqli_fetch_array($result))
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include("welcome.php"); ?>
<div  class="container-fluid ">
    <div class="row flex-nowrap overflow-hidden">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 p-3 mb-2 text-white bg-dark">
            <div class="d-flex flex-column align-items-center mx-auto align-items-sm-start px-3 pt-2 text-white min-vh-100 text-light">
                <a href="" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-dark text-decoration-none text-center">
                    <span class="fs-5 d-none d-sm-inline"> <img class="img-profile rounded-circle" src= <?php echo $row['ProfilePhoto'] ?> style="width:100px; height:100px;"></span>
                </a>
                <br>
                <ul class=" nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start text-white" id="menu">
                    <li>
                        <a href="userDashboard.php" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline text-white h5">Dashboard</span> </a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                            <!-- <li class="w-100">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Pie Chart</span></a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">line</span> </a>
                            </li> -->
                        </ul>
                    </li>
                    <li>
                        <a href="expenses.php" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline text-white h5">Expenses</span></a>
                    </li>
                    <li>
                        <a href="income.php" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline text-white h5">Income</span></a>
                    </li>
                    <hr class="d-flex justify-content-start" style=" width: 155%; color: white; height: 1px; background-color:black;" />
                    <li>
                        <a href="viewDetails.php" class="nav-link px-0 align-middle ">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline text-white h5">View Detalis</span></a>
                    </li>
                    <li>
                        <a href="logOut.php" class="nav-link px-0 align-middle ">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline text-white h5">Log Out</span></a>
                    </li>

                </ul>
                <hr>
            </div>
        </div>
        <div class="col py-3">
           <?php include_once("userContent.php"); ?>
        </div>
    </div>
</div>
<?php }}?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>