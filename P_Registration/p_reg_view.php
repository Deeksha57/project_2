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

 $sql ="SELECT `aadhar`,`phone`, `lmp`, `edd`, `m_card`,`reg_date` FROM p_reg";
 $result = mysqli_query($conn,$sql);

 if (mysqli_num_rows($result)>0)
 {
     echo "<table border='4' background-color='white'>
             <tr>
             <th>Aadhar number</th>
             <th>Phone Number</th>
             <th>L M P</th>
             <th>E D D</th>
             <th>Mother card</th>
             <th>Registration Date</th>
             </tr> ";
    while($row = mysqli_fetch_assoc($result))
    {
        echo "<tr>
              <td>".$row["aadhar"]."</td>
              <td>".$row["phone"]."</td>
              <td>".$row["lmp"]."</td>
              <td>".$row["edd"]."</td>
              <td>".$row["m_card"]."</td>
              <td>".$row["reg_date"]."</td>
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