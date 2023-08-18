<?php
include('connectDatabase.php');
$id= $_SESSION['id'];
$sql="SELECT * FROM users where `ID`='$id'"; 
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
    .inf-content{
        border:1px solid #DDDDDD;
        -webkit-border-radius:10px;
        -moz-border-radius:10px;
        border-radius:10px;
        box-shadow: 7px 7px 7px rgba(0, 0, 0, 0.3);
    }
    .center1 {
        display: block;
        margin-left: auto;
        margin-right: auto;
        margin-top:35px;
        margin-bottom:35px;
        width: 300px;
   }
   /* style= "width:384px; margin:8px;" */
    </style>
  </head>
  <body>

<div class="container bootstrap snippets bootdey">
<div class="panel-body inf-content ">
    <div class="row ">
        <div class="col-md-4 bg-dark">
            <img alt=""  title="" class=" center1 img-circle img-thumbnail isTooltip img-profile rounded-circle bg-dark" src= <?php echo $row['ProfilePhoto'] ?> data-original-title="Usuario"> 
            
        </div>
        <div class="col-md-6">
            <div class="table-responsive">
            <table class="table table-user-information">
                <tbody>
                    <tr>    
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-user  text-primary"></span>    
                                First Name                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                        <?php echo $row['First_Name'];?>     
                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-cloud text-primary"></span>  
                                Lastname                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                        <?php echo $row['Last_Name'];?>  
                        </td>
                    </tr>

                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-bookmark text-primary"></span> 
                                Email Id                                              
                            </strong>
                        </td>
                        <td class="text-primary">
                        <?php echo $row['Email_Id'];?>
                        </td>
                    </tr>


                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-eye-open text-primary"></span> 
                                Role                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                            User
                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-envelope text-primary"></span> 
                                Date Of Birth                                              
                            </strong>
                        </td>
                        <td class="text-primary">
                        <?php echo $row['DOB'];?>
                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-calendar text-primary"></span>
                                Phone No.                                            
                            </strong>
                        </td>
                        <td class="text-primary">
                            <?php echo $row['Phone_No'];?>
                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-calendar text-primary"></span>
                                Gender                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                        <?php echo $row['Gender'];?>
                        </td>
                    </tr>                                    
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>