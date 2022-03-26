<?php 
 $conn = mysqli_connect("localhost","root","","test_db");

 if($conn ===false)
 {
    die("ERROR: could not connect.".mysqli_connect_error());
 }
 $st_id = $_REQUEST['st_id'];
 $name = $_REQUEST['name'];
 $age = $_REQUEST['age'];
 $status = $_REQUEST['status'];
 
 $sql = " INSERT INTO `attendance` ( `st_id`, `name`, `age`, `status`) VALUES ('$st_id','$name','$age','$status')";


 if( mysqli_query($conn, $sql))
 {
    header("Location: ../Home/home.php");
	exit();
 }
 else
 {
     echo "ERROR: SORRY $sql".mysqli_error($conn);
 }

 mysqli_close($conn);
 
?>