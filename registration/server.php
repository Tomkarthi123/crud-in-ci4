<?php

// connect to the database

include('db.php');

session_start();


$username = "";
$email    = "";
$errors = array(); 



// REGISTER USER
if (isset($_POST['reg_user'])) {
  
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  if (count($errors) == 0) {
  	$password = ($password_1);


//Profile upload
    $fname=$_FILES['picture']['name'];
  $ext=strtolower(end(explode('.',$fname)));
  if($ext=='png' ||  $ext=='jpeg'|| $ext=='jpg' || $ext=='gif'){
  $directory='profilepicture';
  $fnewname=$username.'.'.$ext;
  $picturefullpath=$directory.'/'.$fnewname;
  $upload=move_uploaded_file($_FILES['picture']['tmp_name'],"$picturefullpath");
 // echo"png";
  }
  if(!$upload){
    echo( ' Failed to Upload the file  ! file is not an image');exit;
 }

  	$query = "INSERT INTO users (username, email, password,picture) 
  			  VALUES('$username', '$email', '$password',' $picturefullpath')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now registered";
  	header('location: login.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password =($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        $row= mysqli_fetch_assoc($results);
        $id=$row['id'];
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['loginid'] = $id;
          $_SESSION['success'] = "You are now login";

          header('location: index1.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }
//update users
  if (($_POST['update']=="update")) {
   
   
        $id = $_POST['id'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password_1 = $_POST['password_1'];
        $password = ($password_1);
        $fname=$_FILES['picture']['name'];
        $ext=strtolower(end(explode('.',$fname)));
        if($ext=='png' ||  $ext=='jpeg'|| $ext=='jpg' || $ext=='gif'){
        $directory='profilepicture';
        $fnewname=$username.'.'.$ext;
        $picturefullpath=$directory.'/'.$fnewname;
        $upload=move_uploaded_file($_FILES['picture']['tmp_name'],"$picturefullpath");
       // echo"png";
        }
        if(!$upload){
          echo( ' Failed to Upload the file  ! file is not an image');exit;
       }
       $sql = "UPDATE users SET username='$username',email='$email', password='$password',picture='$picturefullpath' WHERE id='$id'";
       if(mysqli_query($db, $sql)){
    echo "Record was updated successfully.";
    header('location: profile.php');
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
} 
  
  }

  //delete users

if($_GET['id'])
{
  $id=$_GET['id'];
  $query="DELETE FROM users WHERE id='$id'";
  $connect=mysqli_query($db,$query);
  if($connect)
  {
   echo  "deleted successful";
   header('location: profile.php');
  }


}
    
   
  
  ?>