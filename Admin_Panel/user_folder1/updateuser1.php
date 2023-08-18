<?php

include('connectDatabase.php');
session_start();
// include('validation.js');
$id= $_GET["id"];
$sql="SELECT `ID`,`First_Name`, `Last_Name`, `Email_Id`, `DOB`, `Phone_No`, `Gender`, `Password` FROM users where `ID`='$id'"; 
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);


?>

<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registration Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
 
  <style>
    input[type='radio'] {
      height: 20px;
      width: 20px;
     vertical-align: left;
     }
     .r1 {
     font-size: 20px;
     text-align:left;
     }
     table,
        th,
        td {
            border: 2px solid black;
            border-collapse: collapse;
        }
  </style>
</head>

<body>
  <form  method="post" onsubmit = "return validate_user()">
    <section class="vh-100 gradient-custom">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-dark text-white" style="border-radius: 1rem;">
              <div class="card-body p-5 text-center">

                <div class="mb-md-5 mt-md-4 pb-5">
                  <h2 class="fw-bold mb-2 text-uppercase">Update Registration Form</h2>
                  <p class="text-white-50 mb-5">Please enter details in the form</p>
                  
                  <div class="form-outline form-white mb-4">
                    <input type="text" id="firstname" name="firstname"  class="form-control form-control-lg"
                      placeholder="Enter your First Name" value="<?php echo $row['First_Name'];?>" />
                      <span style="color:red" id="errorFirstName" ></span>
                  </div>

                  <div class="form-outline form-white mb-4">
                    <input type="text" id="lastname" name="lastname" class="form-control form-control-lg"
                      placeholder="Enter your Last Name" value="<?php echo $row['Last_Name'];?>"  />
                      <span style="color:red" id="errorLastName" ></span>
                  </div>

                  <div class="form-outline form-white mb-4">
                    <input type="text" id="email" name="email" class="form-control form-control-lg"
                      placeholder="Enter your Email Id" value="<?php echo $row['Email_Id'];?>" required="true" />
                      <span style="color:red" id="errorEmail" ></span>
                  </div>

                  <div class="form-outline form-white mb-4">
                    <input type="date" id="dob" name="dob" class="form-control form-control-lg"
                      placeholder="Enter your Date of birth" value="<?php echo $row['DOB'];?>" required="true" />
                  </div>

                  <div class="form-outline form-white mb-4">
                    <input type="text" id="phoneNo" name="phoneNo" class="form-control form-control-lg"
                      placeholder="Enter your Phone Number" value="<?php echo $row['Phone_No'];?>" required="true" />
                      <span style="color:red" id="errorPhoneNo" ></span>
                  </div>
                  <?php
                    if( $row['Gender']=="male")
                    { 
                    ?>
                        <div class="form-outline form-white mb-4 r1">
                        <label class="form-label" required><input type="radio" value="male" name="gender" checked/> Male</label>
                        </div>
                        <div class="form-outline form-white mb-4 r1">
                        <label class="form-label" ><input type="radio" value="female" name="gender"/> Female</label>
                        </div>
                    <?php
                    }
                    else
                    {
                    ?>
                        <div class="form-outline form-white mb-4 r1">
                        <label class="form-label" required><input type="radio" value="male" name="gender" /> Male</label>
                        </div>
                        <div class="form-outline form-white mb-4 r1">
                        <label class="form-label" ><input type="radio" value="female" name="gender" checked/> Female</label>
                        </div>
                    <?php
                    }
                    if(isset($_POST['update']))
                    {
                      $firstname= $_POST["firstname"];
                      $lastname= $_POST["lastname"];
                      $email= $_POST["email"];
                      $dob= $_POST["dob"];
                      $phoneNo= $_POST["phoneNo"];
                      $gender= $_POST["gender"];

                      if($firstname=="" || $lastname=="" || $email=="" || $phoneNo=="")
                      {
                        $errFirstName="All fields are required";
                        echo $errFirstName;
                        exit;
                      }
                      if(!preg_match("/^[A-Za-z]+$/",$firstname))
                      {
                        $errFirstName="Enter correct First Name";
                        echo $errFirstName;
                        exit;
                      }
                      if(!preg_match("/^[A-Za-z]+$/",$lastname))
                      {
                        $errFirstName="Enter correct Last Name";
                        echo $errFirstName;
                        exit;
                      }
                      if(!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/",$email))
                      {
                        $errFirstName="Enter correct Email Id";
                        echo $errFirstName;
                        exit;
                      }
                      if(!preg_match("/^\d{10}$/",$phoneNo))
                      {
                        $errFirstName="Enter correct Phone Number";
                        echo $errFirstName;
                        exit;
                      } 
                      $sql="UPDATE users SET First_Name= '$firstname', Last_Name= '$lastname', Email_Id='$email', DOB='$dob', Phone_No='$phoneNo', Gender= '$gender' where `ID`='$id'";
                      $_SESSION['email'] = $email;
                        if(mysqli_query($con,$sql))
                        {
                            header("location:viewDetails.php");
                        }
                        else
                        {
                            echo "Error: ".$sql.":-".mysqli_error($con);
                        }
                        mysqli_close($con);
    
                    }?>
    
                  
                  <input type="submit" class="btn btn-outline-light btn-lg px-6" value="UPDATE" id="update"  name="update" >
                  
               
            </div>
          </div>
        </div>
      </div>
      </section>
    </form>
    <script> 
function validate_user(){
    var FirstName = document.getElementById("firstname").value;
    var LastName = document.getElementById("lastname").value;
    var Email = document.getElementById("email").value;
    var PhoneNumber = document.getElementById("phoneNo").value;
    let Name_regex =/^[A-Za-z]+$/;
    var mailformat_regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var phoneno_regex=/^\d{10}$/;

    if(!Name_regex.test(FirstName) || FirstName.length == 0){
      // alert('Please enter your first name which does not include numbers and special character');
        document.getElementById("errorFirstName").innerHTML="Please enter your First name which does not include numbers and special character*";
        document.getElementById('firstname').focus();
        return false;
    }
    else{
      document.getElementById("errorFirstName").innerHTML="";
    }
    if(!Name_regex.test(LastName) || LastName.length == 0){
        // alert('Please enter your last name which does not include numbers and special character');
        document.getElementById("errorLastName").innerHTML="Please enter your Last name which does not include numbers and special character*";
        document.getElementById('lastname').focus();
        return false;
    }
    else{
      document.getElementById("errorLastName").innerHTML="";
    }
    if(!mailformat_regex.test(Email)|| Email.length == 0){
        // alert('Please enter correct mail id');
        document.getElementById("errorEmail").innerHTML="Please enter correct mail id*";
        document.getElementById('email').focus();
        return false;
    }
    else{
      document.getElementById("errorEmail").innerHTML="";
    }
    if(!phoneno_regex.test(PhoneNumber) || PhoneNumber.length != 10){
        // alert('Please enter correct Contact Number');
        document.getElementById("errorPhoneNo").innerHTML="Please enter correct Contact Number*";
        document.getElementById('phoneNo').focus();
        return false;
    }
    else{
      document.getElementById("errorPhoneNo").innerHTML="";
    }
}
</script>


</body>

</html>



