<?php
include 'connection.php';
if(isset($_POST['submit']))
{
    $FirstName=$_POST['FirstName'];
    $LastName=$_POST['LastName'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $contactnumber=$_POST['contactnumber'];
    $DOB=$_POST['date'];
    $qualificationn=implode(',',$_POST['qualification']);
    $email=$_POST['email'];
    $password=$_POST['password'];
    $address=$_POST['address'];
    $state=$_POST['state'];
    $username=$_POST['username'];
    mysqli_query($con,"INSERT INTO `assignment1`( `FirstName`, `LastName`, `age`, `gender`, `contactnumber`, `DOB`, `qualification`, `email`, `password`, `address`, `state`,`username`) VALUES ('$FirstName','$LastName','$age','$gender','$contactnumber','$DOB','$qualificationn','$email','$password','$address','$state','$username')");
    mysqli_query($con,"INSERT INTO `login`( `username`, `Password`) VALUES ('$username','$password')");
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
   <td>FirstName</td>
   <td><input type="text" name="FirstName"></td>
</tr>
<tr>
    <td>LastName</td>
    <td><input type="text" name=LastName></td>
</tr>
<tr>
    <td>age</td>
    <td><input type="number" name="age"> </td>
 </tr>
 <tr> 
    <td>gender</td>
    <td><input type="radio" name="gender" value='male'>male<input type="radio" name="gender" value='female'>female</td>
</tr>
<tr>
    <td>contactnumber</td>
    <td><input type="text" name="contactnumber"></td>

</tr>
<tr>
    <td>DOB</td>
    <td><input type="date" name="date"></td>
</tr>
<tr>
    <td> qualification</td>
<td> <input type="checkbox" name="qualification[]" value='SSLC'>SSLC<input type="checkbox" name="qualification[]" value='Graduation'>Graduation</td>
</tr>
<tr>
    <td>email</td>
    <td><input type="text" name="email"></td>
</tr>
   <tr>
    <td>password</td>
    <td><input type="text" name="password"></td>
    </tr>
    <tr>
      <td>address</td> 
      <td><input type="text" name="address"></td> 
    </tr>
    <tr> 
        <td>state</td>
        <td>
            <select name="state">
                <option> SelectnYour State</option>
                 <option >Kerala</option>
                 <option> Karnataka </option>
                 <option >Tamilnadu</option>
           </select>
    </td>
    </tr>
    <tr>
        <td>username</td>
        <td><input type="text" name="username"></td>
    </tr>
    <tr> 
      <td></td> <td> <button name="submit"> Save</button></td>
    </tr>
    
</table>
</form>
</body>
</html>