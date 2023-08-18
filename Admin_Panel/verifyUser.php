<?php
include('connectDatabase.php');
$email = $_POST['email'];
$password=$_POST['password'];
$password=md5($password);

$sql="SELECT `ID`,`UserType`,`Email_Id`,`Password` FROM users "; 
$result=mysqli_query($con,$sql);
$temp=0;
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_array($result))
    {
        if($row["Email_Id"]==$email && $row["Password"]==$password && $row["UserType"]=="User" )
        {
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['id']= $row["ID"];
            header("location:user_folder1/userDashboard.php");
            $temp=1;
        }
        elseif($row["Email_Id"]==$email && $row["Password"]==$password && $row["UserType"]=="Admin" )
        {
            header("location:display.php");
            $temp=1;
        }
    }
    if($temp==0)
    {
        echo "please enter valid email id & password";
    }
  }
else
{
    echo "Error: ".$sql.":-".mysqli_error($con);
}
mysqli_close($con);
?>