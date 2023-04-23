<?php
include 'connection.php';
if(isset($_POST['submit']))
{
  $S_name=$_POST['S_name'];
  $Scontact=$_POST['Scontact'];
  $DOB=$_POST['DOB'];
  $Status=$_POST['Status'];
  $username=$_POST['username'];
  $password=$_POST['password'];

  mysqli_query($con,"INSERT INTO `demo_tb`( `S_name`, `Scontact`, `DOB`, `Status`,`username`,`password`) VALUES ('$S_name','$Scontact','$DOB','$Status','$username','$password')");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">

<table>
    <tr>
        <td>
             Staffname
            </td>
         
            <td>
               <input type="text" name="S_name"> 
            </td>
    </tr>
    <tr>
       <td>Scontact </td> 
       <td><input type="text" name="Scontact"></td>
    </tr>
    <tr>
        <td>
        DOB:
       </td>
       <td> <input type="date" name="DOB"></td>

</tr>
<tr>
    <td> Status</td>
    <td> <input type="text" name="Status"></td>
</tr>

<tr>  <td>username</td>
<td><input type="text" name="username"></td>
</tr>
<tr>
    <td>
        Password
    </td>
    <td><input type="text" name="password"></td>
</tr>

<tr>
    <td> <button name="submit">Save</button></td>
</tr>
</table>


    </form>
</body>
</html>