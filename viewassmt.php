<?php
include 'connection.php';
$data=mysqli_query($con,"select * from assignment1");// save data to the variable $data

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,tr,th,td
        {
         border:2px solid black;
         border-collapse:collapse;

        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>FirstName</th>
            <th>LastName</th>
            <th>age</th>
            <th>gender</th>
            <th>contactnumber</th>
            <th>DOB</th>
            <th>qualification</th>
            <th>email</th>
            <th>password</th>
            <th>address</th>
            <th>state</th>
            <th>username</th>

        </tr>
        <?php
while($row= mysqli_fetch_assoc($data))//o fetch data from table to display 
{
?>
<tr><td><?php echo $row['FirstName'] ; ?></td>

<td><?php echo $row['LastName'];?></td> 

<td><?php echo $row['age'];?></td>

<td><?php echo $row['gender'];?></td>

<td><?php echo $row['contactnumber'];?></td>

<td><?php echo $row['DOB'];?></td>

<td><?php echo $row['qualification'];?></td>

<td><?php echo $row['email'];?></td>

<td><?php echo $row['password'];?></td>

<td><?php echo $row['address'];?></td>

<td><?php echo $row['state'];?></td>

<td><?php echo $row['username'];?></td>
<!--       to delete  the table data -->
<td><a href="delete.php?id=<?php echo $row['id']?>">delete</a></td>
<!--       to edit  the table data -->
<td><a href="update.php?id=<?php echo $row['id']?>">edit</a></td>


</tr>
<?php
}
?>


    </table>
</body>
</html>