<?php 
 $conn = mysqli_connect("localhost","root","","test_db");

 if($conn ===false)
 {
    die("ERROR: could not connect.".mysqli_connect_error());
 }
 $name = $_REQUEST['name'];
 $age = $_REQUEST['age'];
 $f_name = $_REQUEST['f_name'];
 $m_name = $_REQUEST['m_name'];
 $address = $_REQUEST['address'];

 $sql = " INSERT INTO `n_reg` ( `name`, `age`, `f_name`, `m_name`, `address`) VALUES ('$name','$age','$f_name','$m_name','$address')";


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