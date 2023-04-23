<?php
include  'connection.php';
session_start();
if(isset($_POST['submit']))// condition to check when the button is clicked
{
    $username=$_POST['username'];
    $password=$_POST['password'];
$data=mysqli_query($con,"SELECT * FROM `login` WHERE username='$username' and password='$password' ");

$row=mysqli_fetch_assoc($data);//fetching  data to  $row
if(mysqli_num_rows($data)>0)//userid and password match

{
    $_SESSION['login_id']=$row['id'];
    header("location:home.php");// move to the page Home.phpif the condition is true
}
else
{
echo "invalid userid or password";
}
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
            <td> uername:</td>
            <td> <input type="text" name="username"></td>
        </tr>
        <tr>
            <td>
               password:
                
            </td>
            <td><input type="text" name="password"></td>
        </tr>
        <tr>
            <td><button name="submit">Login </button> </td>
        </tr>
       </table> 
    </form>
    <table>

    </table>
</body>
</html>