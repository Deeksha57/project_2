<?php 
 $conn = mysqli_connect("localhost","root","","test_db");

 if($conn ===false)
 {
    die("ERROR: could not connect.".mysqli_connect_error());
 }

 $pros = $_REQUEST['pros'];
 $cons = $_REQUEST['cons'];
 $review = $_REQUEST['review'];
 $rating = $_REQUEST['rating'];
 

 $sql = "INSERT INTO reviews(`pros`,`cons`,`review`,`rating`) VALUES ('$pros', '$cons', '$review', '$rating')";

 if(mysqli_query($conn, $sql))
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