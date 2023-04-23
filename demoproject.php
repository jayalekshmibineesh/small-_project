
<?php

include 'connection.php';
if(isset($_POST['submit']))
{
   $Name=$_POST['Name'] ;
   $DOB=$_POST['DOB'];
   mysqli_query($con,"INSERT INTO `regi1`(`Name`, `DOB`) VALUES ('$Name','$DOB')");
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
    <tr> <td> Name:</td>
    <td> <input type="text" name="Name"></td>
       </tr>
       <tr> 
        <td> DOB:</td>
        <td><input type="date" name="DOB"></td>
       </tr>
       <tr>
        <td><button name="submit">Save</button></td>
      </tr>
       

</table>
</form>

</body>
</html>