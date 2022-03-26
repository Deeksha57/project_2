<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rural Child Management System</title>
     <link rel="icon" href="../Assets/LOGO_ICDS.png">
     <style>
        #table {
            display: grid;
        }
     </style>
</head>
<body style="background-color: #1690A7;">
<?php 
 $conn = mysqli_connect("localhost","root","","test_db");

 if($conn ===false)
 {
    die("ERROR: could not connect.".mysqli_connect_error());
 }

 $sql ="SELECT `name`,`age`, `f_name`, `m_name`, `address` FROM n_reg";
 $result = mysqli_query($conn,$sql);

 if (mysqli_num_rows($result)>0)
 {
     echo "<table border='4' background-color='white'>
             <tr>
             <th>Name of Child</th>
             <th>Age</th>
             <th>Father name</th>
             <th>Mother name</th>
             <th>Address</th>
             </tr> ";
    while($row = mysqli_fetch_assoc($result))
    {
        echo "<tr>
              <td>".$row["name"]."</td>
              <td>".$row["age"]."</td>
              <td>".$row["f_name"]."</td>
              <td>".$row["m_name"]."</td>
              <td>".$row["address"]."</td>
              </tr> " ;  
    }
    echo "</table>";
 }
 else
 {
     echo "0 results";
 }
 mysqli_close($conn);
 ?>
</body>
</html>