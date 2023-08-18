<?php

include('connectDatabase.php');
include('adminView.php');
// echo "<pre>"; print_r($_POST);exit;
  $sql="SELECT `ID`,`First_Name`, `Last_Name`, `Email_Id`, `DOB`, `Phone_No`, `Gender`, `Password` FROM users WHERE UserType='User' "; 
  $result=mysqli_query($con,$sql);
  if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_array($result))
    {
      echo "<tbody>
      <tr>
      <td>".$row["ID"]."</td>
      <td>".$row["First_Name"]."</td>
      <td>".$row["Last_Name"]."</td>
      <td>".$row["Email_Id"]."</td>
      <td>".$row["DOB"]."</td>
      <td>".$row["Phone_No"]."</td>
      <td>".$row["Gender"]."</td>
      <td>"."<a href='updateuser1.php?id=".$row["ID"]."'><button type='button' class='btn btn-primary '>Edit</button></a>"."</td>
      <td>"."<a href='deleteUser.php?id=".$row["ID"]."'><button type='button' class='btn btn-primary '>Delete</button></a>"."</td>
      </tr>
      </tbody>";
    }
    echo "</table>";
    // edit.php/2 url
  }
  else
  {
    echo "Error: ".$sql.":-".mysqli_error($con);
  }
 
  mysqli_close($con);
?>