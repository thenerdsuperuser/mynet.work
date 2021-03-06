<?php
	session_start();
	if(isset($_SESSION['username']))
	{
    header("location: feed.php");
	}
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>login and register form</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/index_style.css">


</head>

<body>
  <div class="wrapper">
    
  <!-- camera logo -->
  <div class="profile"><i class="fa fa-camera fa-2x"></i></div>
  <div class="login is-active">    

  <form action="includes/login.php" method="POST">
    <div class="form-element">
      <span><i class="fa fa-user"></i></span><input type="text" name="username" placeholder="Username"/>
    </div>
    
    <div class="form-element">
      <span><i class="fa fa-lock"></i></span><input type="password" name="password_1" placeholder=" Password"/>
    </div>
    
    <button class="btn-login" name="login-btn" >login</button>
  </form>
  </div>
  


  <form action="includes/register.php" method="POST">
  <div class="register down">
    <div class="form-element">
      
      <span><i class="fa fa-user"></i></span><input type="text" name="username" placeholder="Full Name"/>
    </div>
    <div class="form-element">
      <span><i class="fa fa-envelope"></i></span><input type="email" name="email" placeholder="Your Email Address"/>
    </div>
    <div class="form-element">
      <span><i class="fa fa-lock"></i></span><input type="password" name="password_1" placeholder="Password"/>
    </div>
    <div class="form-element">
      <span><i class="fa fa-lock"></i></span><input type="password" name="password_2" placeholder="Re-Enter Password"/>
    </div>
    <button class="btn-register" name="register-btn">Register</button>
  </div>
</form>

  
  <div class="login-view-toggle">
    <div class="sign-up-toggle is-active">Don't have an account? <a href="#">Sign Up</a></div>
    <div class="login-toggle">Already have an account? <a href="#">Login</a></div>
  </div>
</div>
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
