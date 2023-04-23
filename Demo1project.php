<?php
include 'connection.php';
if(isset($_POST['submit']))
{
    $Name=$_POST['S_Name'];
    $Contact=$_POST['S_Contact'];
    $Status=$_POST['S_Status'];
    

    mysqli_query($con,"INSERT INTO `staffs`( `S_Name`, `S_Contact`,  `S_Status`) VALUES ('$Name','$Contact','$Status')");
   // mysqli_query($con,"INSERT INTO `staffs`( `S_Name`, `S_Contact`, `S_Status`) VALUES ('$Name','$Contact','$Status')");
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
   <td>S_Name:</td> 
   <td> <input type="text" name="S_Name"></td>
</tr>
<tr>
    <td>S_Contact:</td>
    <td><input type="text" name="S_Contact"></td>
</tr>

<tr>
    <td>S_Status</td>
    <td><input type="text"name="S_Status"></td>
</tr>
<tr>
    <td> 
         <button name="submit"> Save</button>
    </td>
</tr>

</table>



    </form>
    
</body>
</html>