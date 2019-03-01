<?php

session_start();
if (isset($_SESSION['auth']) && $_SESSION['auth']==true) {
   header("location: foodhaulers.php");
}

?>




<!DOCTYPE html>
<html>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Form</title>

<head>
<style>
body, html {height: 100%}
body {font-family: "Amatic SC", sans-serif;font-size:25px; color: grey;font-weight:900;background-color: black;text-align:center;
	  
   }
h1{background-image:url("blurpizza.jpg");
 background-repeat: repeat-y;
 display:block;
 text-align:center;
     margin-top: 65px;
}
h1{
	color:white;
	}
input {
    
	float: right;
      position: relative;
      right:35%;
	  cursor:pointer;
	  }
.button1
{
  background-color:#ba1515;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
	border-radius : 25px
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: rgba(0,0,0,0.3);
	position:fixed;
	top:0;
	width:100%;
	
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: left;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #ba1515;
	.active {
    background-color: #4CAF50;
}
ul.active1 {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 200px;
    background-color: #f1f1f1;
}

li.active1 a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

li a.active1 {
    background-color: #4CAF50;
    color: white;
}

li a:hover:not(.active) {
    background-color: #555;
    color: white;
}

  
</style>
</head>

<body>

<ul>
  <li><a class="active" href="foodhaulers.php">HOME</a></li>
  <li><a href=" foodhaulers.php #menu">MENU</a></li>
  <li><a href="foodhaulers.php #about">ABOUT</a></li>
  <li><a href="foodhaulers.php #googleMap">CONTACT</a></li>
  
</ul>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
  <div class="form">
      
    
       
      
        
        <div id="login" >   
          <h1>Welcome Back!</h1>
          


          <form action="process.php" method="POST">
          
            <div class="field-wrap">
            <label>
              Username<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name="username" />
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="off" name="password" />
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button1" type="submit">Log In</button>
          
          </form>

        </div>
        


        <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          


          <form action="register.php" method="POST">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
        <align="center">
                Full Name<span class="req">*</span>
              </label>
      
              <input type="text" required autocomplete="off" name="fname" />            
            </div>
            <div class="field-wrap">
              <label>
                Username<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="username" />
            </div>
            <div class="field-wrap">
              <label>
                Mobile<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="mobile" />
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" required autocomplete="off" name="email" />
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="off" name="password" />
          </div>
          
          <button type="submit" class="button1"/>Get Started</button>
          
          </form>

        </div>

      </div><!-- tab-content -->
      
</div> <!-- /form -->


</body>
</html>
