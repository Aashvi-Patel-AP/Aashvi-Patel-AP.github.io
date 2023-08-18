<?php
$serverName= "localhost";
$hostName = "root";
$password= "";
$dbname="admin_panel";

$con = mysqli_connect($serverName,$hostName,$password,$dbname);
if(!$con){
  die("Could not connect: ".mysqli_connect_error());
}
// else{
//     echo "Database Connected successfully";
// }

?>