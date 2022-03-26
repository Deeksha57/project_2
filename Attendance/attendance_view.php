<!DOCTYPE html>
<html lang="en">
<head>
<title>Rural Child Management System</title>
     <link rel="icon" href="../Assets/LOGO_ICDS.png">
</head>

<body style="background-color: #1690A7;">
<header>

  <h1>Attendance </h1>

</header>


    <h3>Attendance of <?php echo date('Y-m-d'); ?></h3>
    <br>
   
   <?php 
      $conn = mysqli_connect("localhost","root","","test_db");

       if($conn ===false)
       {
      die("ERROR: could not connect.".mysqli_connect_error());
       }
       $sql ="SELECT `st_id`,`name`, `age`, `status` FROM attendance";
 $result = mysqli_query($conn,$sql);

 if (mysqli_num_rows($result)>0)
 {
     echo "<table border='2'  >
             <tr>
             <th>Student ID</th>
             <th>Name</th>
             <th>Age</th>
             <th>Status</th>
             </tr> ";
    while($row = mysqli_fetch_assoc($result))
    {
        echo "<tr>
              <td>".$row["st_id"]."</td>
              <td>".$row["name"]."</td>
              <td>".$row["age"]."</td>
              <td>".$row["status"]."</td>
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





 
 
 
