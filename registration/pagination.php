 <html>   

<head>   

  <title>Pagination</title>   

  <link rel="stylesheet"  

  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">   

  <style>   

  table {  

      border-collapse: collapse;  

  }  

      .inline{   

          display: inline-block;   

          float: right;   

          margin: 20px 0px;   

      }            

      input, button{   

          height: 34px;   

      }    

  .users {   

      display: inline-block;   

  }   

  .users a {   

      font-weight:bold;   

      font-size:18px;   

      color: black;   

      float: left;   

      padding: 8px 16px;   

      text-decoration: none;   

      border:1px solid black;  

      margin: 2px; 

  }   

  .users a.active {   

          background-color: rgba(175, 201, 244, 0.97);   

  }   

  .users a:hover:not(.active) {   

      background-color: #87ceeb;   

  }   
body {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #333;
    background-color: #fff;
}

      </style>   

</head> 

<body>   



  <?php      

    include('db.php');

      // variable to store number of rows per page

      $limit = 5;    

      // update the active page number

      if (isset($_GET["page"])) {    

          $page_number  = $_GET["page"];    

      }    

      else {    

        $page_number=1;    

      }       

      // get the initial page number

      $initial_page = ($page_number-1) * $limit;       

      // get data of selected rows per page 

      $getQuery = "SELECT * FROM users LIMIT $initial_page, $limit";     

      $result = mysqli_query ($db, $getQuery);    

  ?>     

  <div class="container">   
    

    <br>   

    <div>   

      <h1> Pagination </h1>    

      <table class="table table-striped table-condensed    

                                        table-bordered">   

        <thead>   

          <tr>   

            <th>id</th>   

            <th>username</th>   

            <th>email</th>   

          </tr>   

        </thead>   

        <tbody>   

  <?php     

          while ($row = mysqli_fetch_array($result)) {    

                // Table head

          ?>     

          <tr>     

          <td><?php echo $row["id"]; ?></td>     

          <td><?php echo $row["username"]; ?></td>   

          <td><?php echo $row["email"]; ?></td>                                           

          </tr>     

          <?php     

              };    

          ?>     

        </tbody>   

      </table>    

   <div class="users">    

    <?php  

      $getQuery = "SELECT COUNT(*) FROM users";     

      $result = mysqli_query($db, $getQuery);     

      $row = mysqli_fetch_row($result);     

      $total_rows = $row[0];              

  echo "</br>";            

      // get the required number of pages

      $total_pages = ceil($total_rows / $limit);     

      $pageURL = "";             

      if($page_number>=2){   

          echo "<a href='pagination.php?page=".($page_number-1)."'>  Prev </a>";   

      }                          

      for ($i=1; $i<=$total_pages; $i++) {   

        if ($i == $page_number) {   

            $pageURL .= "<a class = 'active' href='pagination.php?page="  

                                              .$i."'>".$i." </a>";   

        }               

        else  {   

            $pageURL .= "<a href='pagination.php?page=".$i."'>   

                                              ".$i." </a>";     

        }   

      };     

      echo $pageURL;    

      if($page_number<$total_pages){   

          echo "<a href='pagination.php?page=".($page_number+1)."'>  Next </a>";   

      }     

    ?>    

    </div>    

    <div class="inline">   

    <input id="page" type="number" min="1" max="<?php echo $total_pages?>"   

    placeholder="<?php echo $page_number."/".$total_pages; ?>" required>   

    <button onClick="go2Page();">Go</button>   

   </div>    

  </div>   

</div>  

   

<script>   

  function go2Page()   

  {   

      var page = document.getElementById("page").value; 
      // var page = $("#page").val();  

      page = ((page><?php echo $total_pages; ?>)?<?php echo $total_pages; ?>:((page<1)?1:page));   

      window.location.href = 'index1.php?page='+page;   

  }   

</script>  

</body>   

</html>  