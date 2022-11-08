<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <title>Register</title>
  </head>
  <style>
 .header {
  width: ;
  margin: 50px auto 0px;
  color: white;
  background: #5F9EA0;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
} 
</style>
  <body>
    <div class="container mt-5">
        
        <div class="row justify-content-md-center">

            <div class="col-6">
            
            <div class="header">
  	            <h2>Register</h2>
             </div>
                
                <?php if(isset($validation)):?>
                    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                <?php endif;?>
                <form action="<?=base_url('/save')?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="InputForName" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="InputForName" value="<?= set_value('name') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForEmail" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="InputForEmail" value="<?= set_value('email') ?>">
                    </div>
                    <div class="mb-3 ">
                    <label for="gender" class="control-label">Gender</label>
                    <select name="gender" id="gender" class="form-select form-select-border" required>
                        <option value="<?=('Male' ? 'Male' : '') ?>">Male</option>
                        <option value="<?=('Female' ? 'Female' : '') ?>">Female</option>
                    </select>
                    </div>
					
                    <div class="mb-3">
                        <label for="InputForAddress" class="form-label">Address</label>
                        <input type="address" name="address" class="form-control" id="InputForAddress" value="<?= set_value('address') ?>">
                    </div>
                    
                    <div class="mb-3">
                        <label for="InputForContact" class="form-label">Contact</label>
                        <input type="contact" name="contact" class="form-control" id="InputForContact" value="<?= set_value('contact') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="InputForPassword">
                    </div>
                    <div class="mb-3">
                        <label for="InputForConfPassword" class="form-label">Confirm Password</label>
                        <input type="password" name="confpassword" class="form-control" id="InputForConfPassword">
                    </div>
                    <div class="group">
                    <label for="email" class="control-label">File Upload</label>
	                <input type="file" id="picture" name="picture">
  	                </div> <br>
                     <p>
                    <button type="submit" onclick="alert('success')" value="Click Me!" class="btn btn-primary">Submit</button> Already a member? <a href="<?= base_url('login/') ?>">Login</a>
  	                </p>
    
                </form>
               
            </div>
            
        </div>
    </div>
    
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>