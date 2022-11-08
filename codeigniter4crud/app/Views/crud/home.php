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
</style>
            </style>
</head>
<body>
   
   <nav class="navbar navbar-expand-lg navbar-light" style="background: linear-gradient(to right, #b2fefa, #0ed2f7);">
   
    <div class="container">

    <a class="navbar-brand" href="<?= base_url() ?>"><p class="oblique"> SK Fashion <i class="fas fa-heart"  style="font-size:26px;color:red;"></i></p></a>
       
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
     <div class="card-body">
        <div class="container-fluid">
            <h1 class="text-center">Welcome to SK Fashion</h1>

        
            <p>            
                      SK Fashion are the popular styles of clothing and accessories at a particular moment in time. Microtrends such as tiny sunglasses and high-waisted denim cycle in and out of fashion within a matter of months up to a few years. </p><br>
              * Textiles. The materials that are used to make clothing such as cotton, rayon and leather.<br>
              * Apparel. Women's, men's and children's clothing.<br>
              * Cosmetics.<br>
              * Fast Moving Consumer Goods. <br>
              * Fashion Accessories.<br>
              * Jewellery.<br>
              * Sportswear.<br>
              * Footwear.<br>
              <br><br>...Quotes about Fashion...<br><br>
              {"What you wear is how you present yourself to the world, especially today, when human contacts are so quick.<br>Fashion is instant language."<br>"Fashion should be a form of escapism, and not a form of imprisonment."<br> "Fashion is like eating; You shouldn't stick to the same menu."}<br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>

        </div>
    </div>
</div>

<div class="footer">

<p> MyViewers &copy; <?php echo date("Y/m/d"); ?></p>

</div>

</body>
</html>