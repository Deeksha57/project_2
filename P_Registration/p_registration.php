<!DOCTYPE html>
<html>
<head>
     <title>Rural Child Management System</title>
     <link rel="icon" href="../Assets/LOGO_ICDS.png">
	 <link rel="stylesheet" type="text/css" href="../CSS/style.css">
</head>
<body style="background-color: #1690A7;">
     <form action="p_registration_check.php" method="post">
     	<h2 style="margin-top:120px">Registration of Pregnant Women</h2>
     	<hr>
         <p>Aadhar Number</p>
             <input type="number" id="aadhar" name="aadhar" maxlength="10"  required>
                       
          <p>Phone Number</p>
             <input type="tel" id="phone" name="phone" maxlength="10" required>

          <p>L M P</p>
             <input type="date" id="lmp" name="lmp">
             
          <p>E D D</p>
             <input type="date" id="edd" name="edd">
             
          <p>Mother card</p>
             <input type="tel" id="m_card" name="m_card">

          <p>Registration Date</p>
             <input type="date" id="reg_date" name="reg_date">
             
        
             <a href="../Home/home.php" target="">
		  <button type="submit">Submit</button>
         </a>
          <a href="../Home/home.php" class="ca">Click To Get Back</a>
         
     </form>
     <div>
     <a href="p_reg_view.php">
          <button style="margin-top:20px">View records</button>
     </a>
     </div>
</body>
</html>