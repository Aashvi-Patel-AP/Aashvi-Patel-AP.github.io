<?php
include('connectDatabase.php');

session_start();
//On page 2
$email = $_SESSION['email'];
$id= $_SESSION['id'];


$sql="SELECT `ID`,`First_Name`, `Last_Name`, `Email_Id`, `DOB`, `Phone_No`, `Gender`,`ProfilePhoto`, `Password` FROM users WHERE `Email_Id`= '$email' "; 
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User Welcome Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
  <header>
    <nav class=" navbar navbar-expand-lg text-light bg-dark">
      <div class=" container-fluid">
        <a class="navbar-brand text-light" href="#">
          <h4 data-toggle="tooltip" data-placement="top" title="Username" > @<?php echo $row['First_Name'];?></h4>
        </a>
        <?php
        echo "<a href='updateuser1.php?id=".$row["ID"]."'><button type='button' class='btn btn-primary '>+Edit Profile</button></a>";
        ?>
      </div>
    </nav>
  </header>
 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"></script>
</body>
</html>