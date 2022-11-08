<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($page_title) ? $page_title ." | " : "" ?>SK Fashion</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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
              <a class="nav-link" href="<?= base_url('/loadRecord') ?>"><i class="fa fa-th-list"></i> Users List</a>
              </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('login/') ?>"><i class="fa fa-sign-out"></i> Logout </a>
                    </li>
                </ul>
            </div>
 
        </div>
    </nav>
   

    <div class="wrapper">
        <div class="main container">
            <?php if(!empty($session->getFlashdata('success_message'))): ?>
                <div class="alert alert-success rouded-0">
                    <div class="d-flex">
                        <div class="col-11"><?= $session->getFlashdata('success_message') ?></div>
                        <!-- <div class="col-1 text-end"><a href="javascript:void(0)" onclick="$(this).closest('.alert').remove()" class="text-muted text-decoration-none"><i class="fa fa-times"></i></a></div> -->
                    </div>
                </div>
            <?php endif ?>
            <?php if(!empty($session->getFlashdata('error_message'))): ?>
                <div class="alert alert-danger rouded-0">
                    <div class="d-flex">
                        <div class="col-11"><?= $session->getFlashdata('error_message') ?></div>
                        <!-- <div class="col-1 text-end"><a href="javascript:void(0)" onclick="$(this).closest('.alert').remove()" class="text-muted text-decoration-none"><i class="fa fa-times"></i></a></div> -->
                    </div>
                </div>
      
            <?php endif ?>