<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/loginstyle.css" rel="stylesheet" type="text/css">

  </head>
  <body>
  <div class="container-fluid" id="wrap">
	  <nav class="navbar navbar-default">
	    <div class="container">
	      <div class="navbar-header">
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
	        <a class="navbar-brand" href="index.html">EVoSys</a></div>
	      <div class="collapse navbar-collapse" id="defaultNavbar1">
<ul class="nav navbar-nav navbar-right">
          <li><a href="about.html">About</a></li>
	          <li><a href="register.html">Register</a></li>
	          <li><a href="login.php">Login</a></li>
	          <li><a href="profile.php">Candidate Profiles</a></li>
	          <li><a href="statistics.php">Statistics</a></li>
	        </ul>
          </div>
        </div>
      </nav>
      
      <form action="welcome.php" method="post">
      <div class="container">
        <label for="textfield"><b>UID</b></label>
        <input type="text" placeholder="Enter UID" name="name" id="textfield" required>
        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" id="password" required>
<input type="submit" name="submit" id="submit" value="Login" >
      </div>
      <div class="container">
      <span class="psw"><a href="register.html">Not yet registered?</a></span>
  </div>
      </form>
  </div>
	<script src="js/jquery-1.11.3.min.js"></script>

	<script src="js/bootstrap.js"></script>
  </body>
</html>