<?php 
 $conn = mysqli_connect("localhost","root","","test_db");

 if($conn ===false)
 {
    die("ERROR: could not connect.".mysqli_connect_error());
 }
 $name = $_REQUEST['name'];
 $email = $_REQUEST['email'];

 $sql = "INSERT INTO contact(name,email) VALUES ('$name', '$email')";
 
 if(mysqli_query($conn,$sql))
 {
    header("Location:../Home/home.php");
	exit();
 }
 else
 {
     echo "ERROR: SORRY $sql".mysqli_error($conn);
 }

 mysqli_close($conn);
?>