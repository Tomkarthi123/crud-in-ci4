<?php
include ('index.php');
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
.bottom {
  position: absolute;
  margin: 0 auto;
  overflow: hidden;
  background-color: rgb(251, 136, 59);
  border-radius: 0px 0px 6px 6px;
  color: white;
  text-align: center;
  width: 170%;
  margin: 20px auto 0px;
  padding: 20px 0px;
}
    </style>
</head>

<body>
    <!-- <div class="container"> -->
        <div class="row">
            <div class="col-md-7">
            <div class="row">

<?php

$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql); 
while($row = mysqli_fetch_assoc($result)) {
// echo $row['id'] ." ". $row['name'] ." ". $row['image'] ." ". $row['price']."<br>";
?>
<div class="col-md-3 text-center mt-5">
    <img src="images/<?php echo $row['image']?>" alt="">
    <h3><?php echo $row['name']?></h3>
    <h6>Price: <?php echo $row['price']?></h6>
    <div class="form-group">
        <label>Select list:</label>
        <select class="form-control" id="quantity<?php echo $row['id']?>">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
        </select>
        <input type="hidden" id="name<?php echo $row['id']?>" value='<?php echo $row['name']?>'>
        <input type="hidden" id="price<?php echo $row['id']?>" value='<?php echo $row['price']?>'>

        <button class='btn btn-danger add' data-id="<?php echo $row['id']?>">Add to Cart</button>

    </div>

</div>

<?php
}

?>

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

<p> MyViewers &copy; <?php echo date("Y/m/d"); ?></p>

</div>
</body>

</html>


<?php


mysqli_close($conn);
 
 
?>