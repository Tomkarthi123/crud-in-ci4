
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <?php 
     include('db.php');
	 include('index.php');

$id= $_GET['id'];

//echo "id =".$id;
$query = "SELECT * FROM users WHERE id='$id' ";
$conn =mysqli_query($db,$query);
$row=mysqli_fetch_assoc($conn);

// print_r($row);

?>
  <div class="header">
  	<h2>Update Page </h2>
  </div>
	
  <form method="POST" action="server.php" enctype="multipart/form-data">
  <div class="input-group">
  	  <input type="hidden" name="id" value="<?php echo $row['id'];?> ">

  	</div>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $row['username'];?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $row['email'];?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1" value="<?php echo $row['password'];?>">
  	</div>
	   <div class="group">
	  <input type="file" name="picture"value="">
	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="update" value="update">Update</button>
  	</div>
  	<p>
  	<a href="index.php"></a>
  	</p>
  </form>
</body>
</html>