<?php 
    include ("connecttodb.php") ;
include("login.php")
    
        
?>


<html>
<head>
  <title>Login/Signup Form</title>
 
  <link rel="stylesheet" type="text/css" href="onelife.css">
</head>
<body>
    
  <div class="container">
    <h2>Login</h2>
    <form name="form" action="login.php" onsubmit="return isvalid()"  method="POST">
   
        
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="email" id="username" name="username"  accept="text/plain" placeholder="Enter your username">
      </div>
        <p class="example">Example:onelife@gmail.com</p>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"  accept="text/plain" placeholder="Enter your password">
      </div>
        
      <div class="form-group">
         <input class="form-group" type="submit" id="btn" value="Login" name = "submit"/>
      </div>
    </form>
     
    </div>
      <p class="signup">Don't have an account? <a href="signup.html">Sign up</a></p>
    
    
</body>
</html>