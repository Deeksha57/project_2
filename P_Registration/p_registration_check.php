<?php 
 $conn = mysqli_connect("localhost","root","","test_db");

 if($conn ===false)
 {
    die("ERROR: could not connect.".mysqli_connect_error());
 }
 $aadhar = $_REQUEST['aadhar'];
 $phone = $_REQUEST['phone'];
 $lmp = $_REQUEST['lmp'];
 $edd = $_REQUEST['edd'];
 $m_card = $_REQUEST['m_card'];
 $reg_date = $_REQUEST['reg_date'];

 $sql = " INSERT INTO `p_reg` ( `aadhar`, `phone`, `lmp`, `edd`, `m_card`, `reg_date`) VALUES ('$aadhar','$phone','$lmp','$edd','$m_card','$reg_date')";


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