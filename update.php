  <?php
include 'connection.php';
$id1=$_GET['id'];
$data=mysqli_query($con,"select * from assignment1 where id='$id1'");
$row=mysqli_fetch_assoc($data);
$gender=$row['gender'];
$qualificationn=$row['qualification'];
$qua=explode(',',$qualificationn); 

if(isset($_POST['submit']))
{
    $FirstName=$_POST['FirstName'];
    
    $LastName=$_POST['LastName'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $contactnumberr=$_POST['contactnumber'];
    $DOB=$_POST['date'];
    $qualificationn=implode(',',$_POST['qualification']);
    // var_dump($qualificationn);
    // exit();
   // $qualificationn=$_POST['qualification[]'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $address=$_POST['address'];
    $state=$_POST['state'];
    $username=$_POST['username'];
    mysqli_query($con,"UPDATE `assignment1` SET `FirstName`='$FirstName',`LastName`='$LastName',`age`='$age',`gender`='$gender',`contactnumber`='$contactnumberr',`DOB`='$DOB',`qualification`='$qualificationn',`email`='$email',`password`='$password',`address`='$address',`state`='$state',`username`='$username' WHERE id='$id1'");
    mysqli_query($con,"UPDATE`login` SET `username` ='$username',`password`='$password' where id='$id1'");
    echo"<script> alert('UPDATED successfully')</script>" ;
    echo" <script> window.location.href='viewassmt.php';  </script>";

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
   <td><input type="text" name="FirstName" value= <?php echo $row['FirstName']; ?>></td>
</tr>
<tr>
<td>LastName</td>
    <td><input type="text" name=LastName value=<?php echo $row['LastName']; ?>></td>
</tr>
<tr>
    <td>age</td>
    <td><input type="number" name="age" value =<?php echo $row['age'];?>> </td>
 </tr>
 <tr> 
    <td>gender</td>
    <td><input type="radio" name="gender" value='male'<?php if($gender=='male') echo 'checked="checked"'?>>male
    <input type="radio" name="gender" value='female'<?php  if($gender=='female') echo 'checked="checked"'?>> female</td>
</tr>
<tr>
    <td>contactnumber</td>
    <td><input type="text" name="contactnumber" value=<?php echo $row['contactnumber'];?>></td>

</tr>
<tr>
    <td>DOB</td>
    <td><input type="date" name="date" value =<?php echo $row['DOB'];?> ></td>
</tr>
<tr>
    <td> qualification</td>
<td> <input type="checkbox" name="qualification[]" value='SSLC'<?php if(in_array("SSLC",$qua)){echo "checked";}?>>SSLC 

<input type="checkbox" name="qualification[]" value='Graduation' <?php if(in_array("Graduation",$qua)){echo "checked";}?>>Graduation</td>
</tr>
<tr>
    <td>email</td>
    <td><input type="text" name="email"  value =<?php echo $row['email'];?>></td>
</tr>
   <tr>
    <td>password</td>
    <td><input type="text" name="password" value =<?php echo $row['password'];?>></td>
    </tr>
    <tr>
      <td>address</td> 
      <td><input type="text" name="address" value =<?php echo $row['address'];?>></td> 
    </tr>
    <tr> 
        <td>state</td>
        <td>
            <select name="state" value =<?php echo $row['state'];?>>
                <option> SelectnYour State</option>
                 <option >Kerala</option>
                 <option> Karnataka </option>
                 <option >Tamilnadu</option> 
           </select>
    </td>
    </tr>
    <tr>
        <td>username</td>
        <td><input type="text" name="username" value =<?php echo $row['username'];?>></td>
    </tr>
    <tr> 
      <td></td> <td> <button name="submit"> Save</button></td>
    </tr>
    
</table>
</form>

</body>
</html>