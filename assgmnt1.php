<?php
include 'connection.php';
if(isset($_POST['submit']))
{
    $FirstName=$_POST{'FirstName'};
    $LastName=$_POST['LastName'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $contactnumber=$_POST['contactnumber'];
    $DOB=$_POST['DOB'];
    $qualification=$_POST['qualification'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $address=$_POST['address'];
    $state=$_POST['state'];
    mysqli_query($con,"INSERT INTO `assignment1`(`FirstName`, `LastName`, `age`, `gender`, `contactnumber`, `DOB`, `qualification`, `email`, `password`, `address`, `state`) VALUES ('$FirstName','$LastName',$age',$gender','$contactnumber','$DOB','$qualification','$email','$password','$address')");
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
    <form method="PoST">

<table>
<tr>
    <td> FirstName:</td>
    <td><input type="text"  name="FirstName"></td>

</tr>
<tr>
    <td>LastName:</td>
    <td><input type="text" name="LastName"></td>
</tr>
<tr>
    <td>age:</td>
    <td><input type="number" name="age"></td>
</tr>
<tr>
    <td>gender: </td>
    <td> <input type="radio" name="gender"></td>
</tr>
<tr>
    <td> contactnumber:</td>
    <td><input type="text" name="contactnumber"></td>
</tr>
<tr>
    <td>DOB:</td>
    <td><input type="date" name="DOB"></td>
</tr>

<tr><td>qualification</td>
<td> <input type="checkbox" name=qualification></td>

</tr>
<tr>
    <td>email:</td>
    <td><input type="text" name="email"></td>
</tr>

<tr>
    <td> password:</td>
    <td> <input type="text" name="password"></td>
</tr>
<!--<tr>
    <td>state:</td>
    <select name="state" >
     <option value="">Select Your State</option>   
     <option value="">kerala</option>
     <option value="">Tamilnadu</option>
     <option value="">Karnadaka</option>
     <option value="">UP</option>
     <option value="">Hariyana</option>
    </select>
</tr>-->

<tr>
    <td> <button name="submit"> save </button></td>
</tr>

</table>
   </form>

</body>
</html>