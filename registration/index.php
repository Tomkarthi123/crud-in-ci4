<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>

<link href="https://fonts.googleapis.com/css?family=Averia+Serif+Libre|Noto+Serif|Tangerine" rel="stylesheet">

<link rel="stylesheet" href="static/css/public_styling.css">

<meta charset="UTF-8">

	<title>Home</title>

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
<div class="navbar">

<div class="logo_div">
	

<style>

.navbar {
  margin: 0 auto;
  overflow: hidden;
  background-color: rgb(251, 136, 59);
  border-radius: 0px 0px 6px 6px;
}
.body{
  min-height: 100%;
  background-image: url(image_shop.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
}

</style>
	
<h1> SK Fashion </h1>

  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->

    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    <?php endif ?>
</div>
<ul>

<li><a class="active" href="index1.php">Home</a></li>

<li><a href="about.php">About</a></li>

<li><a href="contact.php">Contact</a></li>

<li><a href="add.php">carts</a></li>

<li><a href="profile.php">My Profile</a></li>

<li><a href="pagination.php">Customer Details</a></li>

<li><a href="login.php">Logout</a></li>

</ul>
</div>
</div>
</div>
</body>
</html>