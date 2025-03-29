

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
    <script src="https://kit.fontawesome.com/15b32624cf.js" crossorigin="anonymous"></script>
<!--Get your code at fontawesome.com-->
</head>
<body>
<div class="container">

       <h2> Signup Page </h2>
    
    <form action="../DemoH/include/action.php" method="post">
  <i class="fas fa-user"></i> <label for="uname">Username</label>
  <input type="text" id="lname" name="username">
  <i class="fas fa-lock"></i> <label for="pwd" >Password</label>
  <input type="password" id="pwd" name="password" required>
  <i class="fas fa-envelope"></i> <label for="user_image">image</label>
  <input type="file" id="email" name="user_image" required>
  <i class="fas fa-envelope"></i> <label for="dob">Date of borth</label>
  <input type="date" name="dob" id="dob">
  <input style="width:30%;background:black;color:white;padding:8px;border-radius:4px" type="submit" value="Submit">
  <p>Already have an account? <a href="#">Login </a>here</p>
</form>

   </div>
</body>
</html>