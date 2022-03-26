<!DOCTYPE html>
<html>
<head>
     <title>Rural Child Management System</title>
     <link rel="icon" href="../Assets/LOGO_ICDS.png">
	 <link rel="stylesheet" type="text/css" href="../CSS/style.css">
</head>
<body style="background-color: #1690A7;">
     <form action="contact_check.php" method="post">
     	<h2>Contact Us</h2>
     	
     	<label> Name</label>
     	<input type="text" name="name" placeholder="Name" id="name" required><br>
                       
     	<label>Email</label>
     	<input type="email" name="email" placeholder="Enter your email" id="email" required><br>
         <a href="../Home/home.php" target="">
		  <button type="submit">Submit</button>
         </a>
          <a href="../Home/home.php" class="ca">Click To Get Back</a>
         
     </form>
     <div>
     <a href="contact_view.php">
          <button style="margin-top:20px">View records</button>
     </a>
     </div>
</body>
</html>