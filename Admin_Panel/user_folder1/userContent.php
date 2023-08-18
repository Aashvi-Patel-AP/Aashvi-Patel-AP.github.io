<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <style>
    .my-custom-scrollbar {
      position: relative;
      height: 450px;
      overflow: auto;
    }
    .table-wrapper-scroll-y {
      display: block;
    }
    .right{
      float:right;
    }
  </style>
</head>

<body>
  <div class="container-fluid ">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Users</h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-primary">Users Details

        <?php  
          include('connectDatabase.php');
          $id= $_SESSION['id'];
        ?>

        <?php
          // $sql2="SELECT `ID`,`First_Name`, `Type_Of_Expenses`, `Category`, `Expenses`, `Date` FROM expenses WHERE `ID`= '$id' "; 
          $sql2="SELECT `ID`,`Type_Of_Expenses`, `Category`, `Expenses`, `Date` FROM expenses WHERE `ID`= '$id' "; 
          $result=mysqli_query($con,$sql2);
          if(mysqli_num_rows($result)>0){
             
          while($row=mysqli_fetch_assoc($result))
          $sql= "SELECT `Type_Of_Expenses`,`Category`,sum(Expenses) As sum FROM expenses WHERE `ID`= '$id' GROUP BY `Type_Of_Expenses`";
          $sql1= "SELECT `Type_Of_Expenses`,`Category`,sum(Expenses) As sum FROM expenses WHERE `ID`= '$id' GROUP BY `Category`";
          $result=mysqli_query($con,$sql);
          $result1=mysqli_query($con,$sql1);
        //  $row=mysqli_fetch_array($result);
         ?>
         <select class="form-control-lg right">
          <?php
          while($row=mysqli_fetch_assoc($result)){
          ?>
            <option> 
              <?php 
              echo $row['Type_Of_Expenses'].":- ";
              echo $row['sum']?> 
            </option>
          <?php }
        ?>
         </select>
         <select class="form-control-lg right"><?php
          while($row=mysqli_fetch_assoc($result1)){?>
          <option> 
          <?php 
          echo $row['Category'].":- ";
          echo $row['sum']?> 
          </option>
          <?php }
          ?>
          </select>
          
          <?php } ?>
        
          </h4>
  </div>
      <div class="card-body">
        <div class="table-responsive table-wrapper-scroll-y my-custom-scrollbar">

          <table class="table table-bordered dataTable scrolldown" id="dataTable" width="100%" cellspacing="0"
            role="grid" aria-describedby="dataTable_info" style="width: 100%;">
            <thead class="table-secondary">
            </thead>
       </div>
      </div>
    </div>

  </div>
</body>

</html>
<?php


// session_start();
//On page 2
$id= $_SESSION['id'];

  $sql="SELECT `ID`,`Type_Of_Expenses`, `Category`, `Expenses`, `Date` FROM expenses WHERE `ID`= '$id' "; 
  $result=mysqli_query($con,$sql);
  if(mysqli_num_rows($result)>0){
    
    while($row=mysqli_fetch_assoc($result))
    { 
      echo "<tbody>
      <tr>
      <td>".$row["Type_Of_Expenses"]."</td>
      <td>".$row["Category"]."</td>
      <td>".$row["Expenses"]."</td>
      <td>".$row["Date"]."</td>
      </tr>
      </tbody>";
    }
    $sql= "SELECT sum(Expenses) As sum FROM expenses WHERE `ID`= '$id'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result);

    echo "<tbody>
    <tr>
    <td></td>
    <td></td>
    <td>".$row['sum']."</td>
    <td></td>
    </tr>
    </tbody>";
    echo "</table>";
  }
  else
  {
    include("firstTimeLogin.php");
  }
 
  mysqli_close($con);
?>
