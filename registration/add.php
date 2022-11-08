<?php

include('index.php');

session_start();
  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>


<!DOCTYPE html>
<html lang="en">

<head>

<title> Sk </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Averia+Serif+Libre|Noto+Serif|Tangerine" rel="stylesheet">

<link rel="stylesheet" href="static/css/public_styling.css">

<meta charset="UTF-8">

<title> Carts </title>

    <style>
    img {
        width: 100% !important;
        height: 100px !important;
        object-fit: contain
    }

    h3 {
        text-align: center;
        white-space: nowrap
    }

    h6 {
        text-align: center
    }
    body{
  min-height: 100%;
  background-image: url(image_shop.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
}
.navbar {
  margin: 0 auto;
  overflow: hidden;
  background-color: rgb(251, 136, 59);
  border-radius: 0px 0px 6px 6px;
}
.bottom {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  color: white;
  background-color: rgb(251, 136, 59);
  text-align: center;
  width: 100%;
  margin: 20px auto 0px;
  padding: 20px 0px;
}

    
    </style>
</head>



<body>
    
    <br><h1> Add to cart details with price </h1>

    <!-- <div class="container"> -->
        <div class="row">
            <div class="col">
            <div class="row">

<body>


</div>
            <div class="col-md-1">

            </div>
            <div class="col-md-4">
            <h3 class='text-center'> </h3>
            <div id="display">
            <?php 
                if(!empty($_SESSION['cart'])){
                    $outputTable = '';
                    $total = 0;
                    $outputTable .= "<table class='table table-bordered'><thead><tr><td>Name</td><td>Price</td><td>Quantity</td><td>Action</td> </tr></thead>";
                    foreach($_SESSION['cart'] as $key => $value){
                        $outputTable .= "<tr><td>".$value['p_name']."</td><td>".($value['p_price'] * $value['p_quantity']) ."</td><td>".$value['p_quantity']."</td><td><button id=".$value['p_id']." class='btn btn-danger delete'>Delete</button></td></tr>";  
                        $total = $total + ($value['p_price'] * $value['p_quantity']);
                    }
                    $outputTable .= "</table>";
                    $outputTable .= "<div class='text-center'><b>Total: ".$total."</b></div>";
                    echo $outputTable;
                }
?>
            </div> 
            </div>
        </div>


       
    </div>


    <script>

    $(document).ready(function() {
         alldeleteBtn = document.querySelectorAll('.delete')
         alldeleteBtn.forEach(onebyone => {
            onebyone.addEventListener('click',deleteINsession)
         })

function deleteINsession(){
    removable_id = this.id;
    $.ajax({
                url:'cart.php',
                method:'POST',
                dataType:'json',
                data:{ 
                      id_to_remove:removable_id,
                      action:'remove' 
                },
                success:function(data){
                        $('#display').html(data);
           alldeleteBtn = document.querySelectorAll('.delete')
         alldeleteBtn.forEach(onebyone => {
            onebyone.addEventListener('click',deleteINsession)
         })
                      }
              }).fail( function(xhr, textStatus, errorThrown) {
        alert(xhr.responseText);
    });

}


        $('.add').click(function() { 
            alert("hi");
            id = $(this).data('id');
            name = $('#name' + id).val();
            price = $('#price' + id).val();
            quantity = $('#quantity' + id).val();
              $.ajax({
                url:'cart.php',
                method:'POST',
                dataType:'json',
                data:{
                      cart_id : id,
                      cart_name : name,
                      cart_price : price,
                      cart_quantity : quantity,
                      action:'add' 
                },
                success:function(data){
                    console.log(data);
                        $('#display').html(data);
                        alldeleteBtn = document.querySelectorAll('.delete')
         alldeleteBtn.forEach(onebyone => {
            onebyone.addEventListener('click',deleteINsession)
         })
                      }
              }).fail( function(xhr, textStatus, errorThrown) {
        alert(xhr.responseText);
    });
        
        })
    })
    </script>

<!-- <button style="font-size:24px">Button <i class="fa fa-shopping-cart"></i></button> -->
<div class="bottom">

<p> MyViewers &copy; <?php echo date('Y'); ?></p>

</div>

</body>

</html>

<?php


mysqli_close($conn);
 
 
?>
