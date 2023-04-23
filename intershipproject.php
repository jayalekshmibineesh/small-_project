
<?php
include 'connection.php';

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$Dob=$_POST['Dob'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$password=$_POST['password'];

mysqli_query($con,"INSERT INTO `registration`(`name`,`Dob`,`email`,`contact`,`password`) VALUES('$name','$Dob','$email','$contact','$password')");

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
            <td> Name: </td>
            <td>  <input type ="text" name="name"></td><br>
        </tr>
        <tr>
           <td>Date of Birth </td> <td> <input type="date" name="Dob"><br></td>
        </tr>
        <tr>
           <td>Email </td> <td> <input type="email" name="email"> <br></td>
        </tr>
        <tr>
           <td>Contact </td> <td> <input type="text" name="contact"><br></td>
        </tr>
        <tr>
           <td>Password </td> <td> <input type="text" name="password"><br></td>
        </tr>
        <tr>
            <td>
                <button name="submit"> save</button>
            </td>
        </tr>
</table>
    </form>
</body>
</html>