<?php

include('connectDatabase.php');

$id= $_GET["id"];

$sql="DELETE FROM users where `ID`='$id' "; 
$sql1="DELETE FROM expenses where `ID`='$id' "; 
$sql2="DELETE FROM income where `ID`='$id' "; 

  if(mysqli_query($con,$sql) && mysqli_query($con,$sql1) && mysqli_query($con,$sql2) )
  {
    // echo "Record deleted successfully";
    header("location:display.php");
  }
  else{
    echo "error while deleting record: ".mysqli_error($con);
  }
  mysqli_close($con);
?>