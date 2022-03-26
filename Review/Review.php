
<!DOCTYPE html>
<html>
<head>
     <title>Rural Child Management System</title>
     <link rel="icon" href="../Assets/LOGO_ICDS.png">
	 <link rel="stylesheet" type="text/css" href="../CSS/style.css">
</head>
<body style="background-color: #1690A7;">
     <form action="../Review/Review_check.php" method="post">
     	<h2>Review Us</h2>
     	<hr>
         <p>Pros</p>
             <textarea name="pros" id="pros" cols="30" rows="2" required></textarea>
                       
          <p>Cons</p>
             <textarea name="cons" id="cons" cols="30" rows="2"></textarea>

          <p>Reviews</p>
             <textarea name="review" id="review" cols="30" rows="4"></textarea>
           
             <p>Rate your Experience</p>
             <select name="rating" required>
                 <option value="1">1</option>
                 <option value="2">2</option>
                 <option value="3">3</option>
                 <option value="4">4</option>
                 <option value="5">5</option>
             </select>
             <br>
             <br>
             <hr>
             <a href="../Home/home.php" target="">
		  <button type="submit">Submit</button>
         </a>
          <a href="../Home/home.php" class="ca">Click To Get Back</a>
         
     </form>
     <div>
     <a href="../Review/view_review.php">
          <button style="margin-top:20px">View records</button>
     </a>
     </div>
</body>
</html>