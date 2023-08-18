<?php
include_once('connectDatabase.php');
if(isset($_POST['submit']))
{
  $firstname= $_POST["firstname"];
  $lastname= $_POST["lastname"];
  $email= $_POST["email"];
  $dob= $_POST["dob"];
  $phoneNo= $_POST["phoneNo"];
  $gender= $_POST["gender"];
  $filename1= $_FILES["profile_photo"]["name"];
	$tempname=$_FILES["profile_photo"]["tmp_name"];
  $password= $_POST["password"];
  $confirmpassword=$_POST["confirm_password"];
  $usertype="User";
  $password=md5($password);
  $confirmpassword=md5($confirmpassword);
  $extension= pathinfo($filename1,PATHINFO_EXTENSION);
  $folder = "./user_folder1/image/" .$firstname."profile.".$extension;

  $filename1="./image/".$firstname."profile.".$extension;
  
  if($firstname=="" || $lastname=="" || $email=="" || $phoneNo=="" ||$password=="" || $confirmpassword=="" || $filename1=="" )
  {
    $errFirstName='<div class="error"> All fields are required </div>';
    echo $errFirstName;
    exit;
  }
  if(!preg_match("/^[A-Za-z]+$/",$firstname))
  {
    $errFirstName='<div class="error"> Enter correct First Name </div>';
    echo $errFirstName;
    exit;
  }
  if(!preg_match("/^[A-Za-z]+$/",$lastname))
  {
    $errFirstName='<div class="error">Enter correct Last Name</div>';
    echo $errFirstName;
    exit;
  }
  if(!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/",$email))
  {
    $errFirstName='<div class="error">Enter correct Email Id</div>';
    echo $errFirstName;
    exit;
  }
  if(!preg_match("/^\d{10}$/",$phoneNo))
  {
    $errFirstName='<div class="error">Enter correct Phone Number</div>';
    echo $errFirstName;
    exit;
  }
  if($password!=$confirmpassword)
  {
    $errFirstName='<div class="error">Password and Confirmpassword must be same</div>';
    echo $errFirstName;
    exit;
  }

  $sql="INSERT INTO users (`UserType`,`First_Name`, `Last_Name`, `Email_Id`, `DOB`, `Phone_No`, `Gender`, `ProfilePhoto` , `Password`) VALUES ('$usertype','$firstname', '$lastname', '$email', '$dob', '$phoneNo', '$gender', '$filename1', '$password');";
  
  if(mysqli_query($con,$sql) && move_uploaded_file($tempname,$folder))
  {
    header("location:user_folder1/userDashboard.php");
  }
  else
  {
    echo "Error: ".$sql.":-".mysqli_error($con);
  }
  mysqli_close($con);
}
?>