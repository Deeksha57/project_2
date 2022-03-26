<!DOCTYPE html>
<html>
<head>
     <title>Rural Child Management System</title>
     <link rel="icon" href="../Assets/LOGO_ICDS.png">
	 <link rel="stylesheet" type="text/css" href="../CSS/style.css">
</head>
<body style="background-color: #1690A7;">
     <form action="attendance_check.php" method="post">
     	<h2 style="margin-top:20px">Attendance of Students</h2>
     	<hr>
         <p>Student ID</p>
         <select name="st_id" required>
                 <option value="1">1</option>
                 <option value="2">2</option>
                 <option value="3">3</option>
                 <option value="4">4</option>
                 <option value="5">5</option>
             </select>                       
          <p>Name</p>
             <input type="text" id="name" name="name" required>

             <p>Age</p>
             <input type="text" id="age" name="age" required>


             <p>Status</p>
             <select name="status" required>
                 <option value="1">Present</option>
                 <option value="2">Absent</option>
                  </select>        
             <a href="../Home/home.php" target="">
		  <button type="submit" style="margin-top:40px">Submit</button>
         </a>
         <br>
         <br>
          <a href="../Home/home.php" class="ca" >Click To Get Back</a>
         
     </form>
     <div>
     <a href="attendance_view.php">
          <button style="margin-top:20px">View records</button>
     </a>
     </div>
</body>
</html>