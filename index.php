

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
<h2>
        Login Page 
    </h2>
    <form action="" method="post">
    <i class="fas fa-envelope"></i> <label for="email">Email</label>
  <input type="text" id="email" name="email" required>
  <i class="fas fa-lock"></i> <label for="pwd" >Password</label>
  <input type="password" id="pwd" name="pwd" required>
  <input style="width:30%;background:black;color:white;padding:8px;border-radius:4px" type="submit" value="Submit">
    </form>
    <h2>
        Signup Page
    </h2>
    <form action="./DBH class/Dbh.php" method="post">
  <i class="fas fa-user"></i> <label for="uname">Username</label>
  <input type="text" id="lname" name="uname">
  <i class="fas fa-envelope"></i> <label for="email">Email</label>
  <input type="text" id="email" name="email" required>
  <i class="fas fa-lock"></i> <label for="pwd" >Password</label>
  <input type="password" id="pwd" name="pwd" required>
  <input style="width:30%;background:black;color:white;padding:8px;border-radius:4px" type="submit" value="Submit">
  <p>Already have an account? <a href="#">Login </a>here</p>
</form>

   </div>
</body>
</html>