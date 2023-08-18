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
    $education= $_POST["education"];
    $education_exp= $_POST["education_exp"];
}
$sql="SELECT `ID`,`First_Name`, `Last_Name`, `Email_Id`, `DOB`, `Phone_No`, `Gender`,`ProfilePhoto`, `Password` FROM users WHERE `ID`= '$id' "; 
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
$id=$row["ID"];
$firstname=$row["First_Name"];

$sql1 ="INSERT INTO expenses(`ID`, `First_Name`, `Type_Of_Expenses`, `Category`, `expenses`,`Date`) VALUES ('$id', '$firstname', 'education', '$education', '$education_exp',now() );";

if(mysqli_query($con,$sql1))
{
  $_SESSION['success_message']="<h4>Data entered successfully</h4>";
  echo '<script>window.location.assign("../../userDashboard.php");</script>'; 
  exit;
}
?>
