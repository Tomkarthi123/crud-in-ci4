
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    table, th, td {
    border: 3px solid black;
    border-collapse: collapse;
    text-align: center;
    padding: 20px;
    background-color:white;
    margin-left:360px;
    margin-top:50px;
    }
    #staff {
        color: red;
    }
    body{
        background-color:#92e3ed;;
        
    }
    td:nth-child(even){
        background-color: #E6F7E9;
    }
    td:nth-child(odd){
        background-color: #E7E4E4;
    }
    .link{
        margin-right: 0px;
        float: right;
        margin-bottom: 34px;
        margin-top: 13px;
        font-weight:bold;
        font-size:25px;
    }
    input{
    padding: 5px 55px;
    text-align: center;
    margin-top: 27px;
    }
    .edit
    {
        padding: 10px 20px;
        background-color: #2164C9;
        border: none;
        color: white;
    }
    .table, th, td {
  border: 3px solid black;
  border-collapse: collapse;
  text-align: center;
  padding: 20px;
  background-color: white;
  margin-left: 350px;
  margin-top: 40px;
}
    
</style>

<?php
    include("index.php");
    include("db.php");
    session_start();
    $id=$_SESSION['loginid'];
    $query= "SELECT*FROM users WHERE id='$id'";
    $connect=mysqli_query($db,$query);
    $row=mysqli_fetch_assoc($connect);
    echo'<table class="staff">';
    echo"<tr>";
    echo"<th> id </th>";
    echo"<th>Username</th>";
    echo"<th>Password </th>";
    echo"<th> Email </th>";
    echo"<th> picture </th>";
    echo"<th> Edit</th>";
    echo"<th> Delete </th>";
    echo"</tr>";
    echo"<tbody id='mytable'>";
    echo"<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['username']."</td>";
    echo "<td>" . $row['password'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";

    echo "<td><img src='".$row['picture']."' width='50' height='60'></td>";
    echo"<td><a href='register_edit.php?id=$id' class='fa'>&#xf044;</a></td>";
    echo "<td> <a href='server.php?id=$id' class='fa'>&#xf014;</a></td>";
    echo"</tr>";
    echo"</tbody>";
 
 echo"</table>";
 echo"</div>";
 echo"</div>";
 echo"</boby>";

?>