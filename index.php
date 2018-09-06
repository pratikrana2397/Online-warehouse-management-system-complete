<?php
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('home.php', false);}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Log in</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
body, html{
    height: 100%;
    margin: 0;
}

.bg {
    /* The image used */
    background-image: url("img_ny.jpg");

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
</head>
<body>
<div class="bg">  
<div class="jumbotron">
    <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header" style="height:60px;">
      <a href="index.php" class="navbar-brand"> <b> Delhi Metro Rail Corporation </b> <a href="#" > <img src="dmrc.png" height="60" width="60"></a>
    </div>
  </div>
</nav>
</div>
  <?php echo display_msg($msg); ?>
<div class="container   col-lg-4  col-lg-offset-4 col-xs-10  col-xs-offset-1" style="background-color: #F8F8FF;border:2px solid white;border-radius: 15px;"><br>
    <br>
  <div class="row">
    <div class="form-group col-lg-6  col-lg-offset-3">
  <h2 style="color:#3399ff; font-family:Arial, Helvetica, sans-serif;"><center><b>Login</b></center></h2>
</div>
</div>
        
  <form method="post" action="auth.php">
    <br>
  	<div class="row">
   <div class="form-group col-lg-10  col-lg-offset-1">
  		<!--<label for="username" class="control-label">Username</label>-->
  		<input type="name" name="username" class="form-control input-lg" placeholder="Username" >
  	</div>
  </div>
  <br>
  	<div class="row">
    <div class="form-group col-lg-10  col-lg-offset-1">
    <!--<label for="Password" class="control-label">Password</label>-->
            <input type="password" name= "password" class="form-control input-lg" placeholder="Password">
  	</div>
  	</div>
    <br><br>
     <div class="row">
     <div class="form-group col-lg-8  col-lg-offset-5 col-xs-offset-3">
      <button type="submit" class="btn btn-success btn-lg" name="login_user">Login</button>
  	</div>
  </div>
  </form>
</div>
</body>
</html>

