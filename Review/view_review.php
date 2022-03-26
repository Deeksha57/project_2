<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rural Child Management System</title>
     <link rel="icon" href="../Assets/LOGO_ICDS.png">
</head>
<body style="background-color: #1690A7;">
<?php 
 $conn = mysqli_connect("localhost","root","","test_db");

 if($conn ===false)
 {
    die("ERROR: could not connect.".mysqli_connect_error());
 }

 $sql ="SELECT `pros`,`cons`, `review`, `rating` FROM reviews";
 $result = mysqli_query($conn,$sql);

 if (mysqli_num_rows($result)>0)
 {
     echo "<table border='2' background-color='white' >
             <tr>
             <th>Pros</th>
             <th>Cons</th>
             <th>Review</th>
             <th>Rating</th>
             </tr> ";
    while($row = mysqli_fetch_assoc($result))
    {
        echo "<tr>
              <td>".$row["pros"]."</td>
              <td>".$row["cons"]."</td>
              <td>".$row["review"]."</td>
              <td>".$row["rating"]."</td>
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