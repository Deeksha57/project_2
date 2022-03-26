<?php

ob_start();
session_start();

if($_SESSION['name']!='root')
{
  header('location: ../index.php');
}
?>


<?php 


if ((isset($_SESSION['id']) && isset($_SESSION['user_name']))){

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Rural Child Management System</title>
	<link rel="stylesheet" href="../CSS/home.css">
     <link rel="icon" href="../Assets/LOGO_ICDS.png">
</head>
<body>
     <div>
          <header id="header">
               <span id="header_span">
                    <a style="text-decoration: none;color:whitesmoke;cursor: pointer;margin: 150px;margin-top:37px;position: absolute;"href="../Index_page/index1.php">Home</a>

                    <a style="text-decoration: none;color:whitesmoke;cursor: pointer;margin: 350px;margin-top:37px;position: absolute;"href="../About/about.html">About</a>
                         
                    <a style="text-decoration: none;color:whitesmoke;cursor: pointer;margin: 550px;margin-top:37px;position: absolute;"href="../Review/Review.php">Reviews</a>

                    <a style="text-decoration: none;color:whitesmoke;cursor: pointer;margin: 750px;margin-top:37px;position: absolute;"href="../contact/contact.php">Contact</a>
               </span>
               <hr style="margin-top:110px">
               <hr style="margin-top:-8px">
               <hr style="margin-top:417px">

          </header>

          <div id="column 1">
               <a href="../P_Registration/p_registration.php">
               <button>
              <div id="box1" style="height: 260px; margin-top: 150px;">
                 <h1 id="rg">Registration Of Pregnant Women</h1>
              </div>
              </button>
              </a>

              <a href="../Attendance/attendance.php">
               <button>
              <div id="box2" style="height: 260px; margin-top: 150px; ">
                 <h1 id="rg" >Attendance</h1>
              </div>
              </button>
              </a>

              <a href="../N_Registration/n_registration.php">
               <button>
              <div id="box3" style="height: 260px; margin-top: 150px;">
                 <h1 id="rg">Registration Of New Born Baby</h1>
              </div>
              </button>
              </a>
          </div> 
          
          <div id="footer" style="color: rgb(5, 25, 80)">
            <hr style="margin-top:10px">
               <br>
              <address style="text-align:center;">
              copyright &copy; 2022. Ministry of Women and Child Development(MWCD), Government of India. All Rights Reserved.
              </address>
     
              <address style="text-align:center;">
              Designed & Developed by MITM Students.
              </address>
              
              <address style="text-align:center;">
              Visit us at:
              MIT Mysore.<br>
              Belawadi, Srirangapatna Taluk, Mandya-571438.
              </address>
          </div>
          
     </div>
     

    
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}

 ?>