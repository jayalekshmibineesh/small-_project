<?php
include 'connection.php';
$data=mysqli_query($con,"select * from regi1");

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
         border-collapse: collapse;

        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>DOB</th>
        </tr>
        <?php
            while($row= mysqli_fetch_assoc($data))
             {
       ?>
              <tr><td><?php echo $row['Name'] ; ?></td> 
              <td><?php echo $row['DOB'] ; ?></td> </tr>
              
              <?php
                 }
              ?>

    </table>
</body>
</html>
