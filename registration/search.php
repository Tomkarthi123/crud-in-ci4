<?php
 include('db.php');
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search data</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    
<div class= "container my-5 ">
    <form method="post" action= "search.php">
        <input type="text" placeholder="search data"name="search">
        <button class="btn btn-dark btn-sm"name="submit">search</button>
    </form>
    
     <div class= "container my-5 ">
        <table class="table">
    
 <?php


       if(isset($_POST['submit'])){
        $search=$_POST['search'];

        $sql="SELECT * FROM users WHERE id like '%$search%' or username like '%$search%' or email like '%$search%'";
        $result=mysqli_query($db,$sql);

            echo'<thead>
            <tr>
            <th>S1 no</th>
            <th> Username </th>
            <th> Email </th>
            </tr>
            </thead>';
            while($row=mysqli_fetch_assoc($result)) {
            echo '<tbody>
            <tr>
            <td>'.$row['id'].'</td>
            <td>'.$row['username'].'</td>
            <td>'.$row['email'].'</td
            </tr>
            </tbody>';

        }



       }

        


        
      
      
      ?>


    </div>
</div>
</body>
</html>