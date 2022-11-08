<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($page_title) ? $page_title ." | " : "" ?>SK Fashion</title>
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/custom-style.css" /> -->
 
    <style>
    body{
                background-image: url("<?php echo base_url(); ?>/image_shop.jpg");
                background-size: cover;
                background-repeat: no-repeat;
                background-attachment: fixed;
            }
 .footer {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  color: white;
  background-color:   ;
  text-align: center;
  width: 100%;
  margin: 20px auto 0px;
  padding: 20px 0px;
}
p.oblique {
  font-style: oblique;
}
table, th, td {
    border: 3px solid black;
    /* border-collapse: collapse; */
    /* text-align: center; */
    padding: 10px;
    /* background-color:white; */
    /* margin-left:360px; */
    margin-top:50px;
    }
.header {
  width: ;
  /* margin: 50px auto 0px; */
  color: white;
  /* background: */
  text-align: center;
  /* border: 1px solid #B0C4DE; */
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 10px;
  margin-top:50px;
  margin-bottom:50px;
} */                
                    
</style>
            
</head>
<body>
   
   <nav class="navbar navbar-expand-lg navbar-light" style="background: linear-gradient(to right, #b2fefa, #0ed2f7);">
   
    <div class="container">

    <a class="navbar-brand" href="<?= base_url() ?>">SK Fashion</a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= base_url() ?>">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link " href="<?= base_url('main/contact') ?>"><i class="fa fa-address-book" style="font-size:18px"></i>Contact</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/profile') ?>"><i class="fa fa-user" aria-hidden="true"></i> My profile </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('main/create') ?>"><i class="fa fa-plus-square"></i> Add Customer </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('main/list') ?>"><i class="fa fa-th-list"></i> Customer List</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('login/') ?>"><i class="fa fa-sign-out"></i> Logout </a>
                    </li>
                </ul>
            </div>
 
        </div>
    </nav>

    <div class="contianer-fluid">
    
        <div class="container mt-5">
        
      <!-- <div class="row justify-content-md-center"> -->

            <div class="col-6">
            
            <div class="header">
  	            <h2>Profile</h2>
             </div>

<?php


echo"<table>";
           echo "<tr><th>Id</th><td>".$user_obj['user_id']."</td><tr>";
           echo "<tr><th> Name</th><td>".$user_obj['user_name']."</td></tr>";
           echo "<tr><th>Email</th><td>".$user_obj['user_email']."</td></tr>";
           echo "<tr><th>Gender</th><td>".$user_obj['gender']."</td></tr>";
           echo "<tr><th>Address</th><td>".$user_obj['user_address']."</td></tr>";
           echo "<tr><th>Contact</th><td>".$user_obj['user_contact']."</td></tr>";
           echo "<tr><th>Password</th><td>".$user_obj['user_password']."</td></tr>";
           echo"<tr><th>Profile Picture</th><td><img src='http://localhost/codeigniter4crud/tests/picture/".$user_obj['picture']."'  width='100'height='80'></td>";
           echo"</table>";
?>
</div>
    </div>
      </div>
    
<div class="footer">

<p> MyViewers &copy; <?php echo date("Y/m/d"); ?></p>

</div>

</body>
</html>