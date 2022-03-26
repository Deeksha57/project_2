<!DOCTYPE html>
<html>
<head>
     <title>Rural Child Management System</title>
     <link rel="icon" href="../Assets/LOGO_ICDS.png">
	 <link rel="stylesheet" type="text/css" href="../CSS/style.css">
</head>
<body style="background-color: #1690A7;">
     <form action="n_registration_check.php" method="post">
     	<h2 style="margin-top:120px">Registration of New born Baby</h2>
     	<hr>
         <p>Name of child</p>
             <input type="name" name="name" required>
                       
          <p>Age</p>
          <input type="age" name="age" required>

          <p>Father Name</p>
          <input type="f_name" name="f_name" required>
             
          <p>Mother Name</p>
          <input type="m_name" name="m_name" required>
             
          <p>Address</p>
          <textarea name="address" id="address" cols="30" rows="2" required></textarea>

             <a href="../Home/home.php" target="">
		  <button type="submit">Submit</button>
         </a>
          <a href="../Home/home.php" class="ca">Click To Get Back</a>
         
     </form>
     <div>
     <a href="n_reg_view.php">
          <button style="margin-top:20px">View records</button>
     </a>
     </div>
</body>
</html>