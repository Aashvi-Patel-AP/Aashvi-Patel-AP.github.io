<?php
$serverName= "localhost";
$hostName = "root";
$password= "";
$dbname="admin_panel";

session_start();
//On page 2
$id= $_SESSION['id'];

$con = mysqli_connect($serverName,$hostName,$password,$dbname);
if(!$con){
  die("Could not connect: ".mysqli_connect_error());
}
// echo "<pre>"; print_r($_POST); 
if(isset($_POST['submit']))
{
    $salary= $_POST["salary"];
    $salary_inc= $_POST["salary_inc"];
}
$sql="SELECT `ID`,`First_Name`, `Last_Name`, `Email_Id`, `DOB`, `Phone_No`, `Gender`,`ProfilePhoto`, `Password` FROM users WHERE `ID`= '$id' "; 
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
$id=$row["ID"];
$firstname=$row["First_Name"];

$sql1 ="INSERT INTO income(`ID`, `First_Name`, `Type_Of_Income`, `Category`, `Income`,`Date`) VALUES ('$id', '$firstname', 'salary', '$salary', '$salary_inc',now() );";

if(mysqli_query($con,$sql1))
{
  $_SESSION['success_message']="<h4>Data entered successfully</h4>";
  echo '<script>window.location.assign("../../userDashboard.php");</script>'; 
  exit;
}
?>
