<?php
session_start();
include("connectDB.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome/css/all.min.css" rel="stylesheet">
    <script src="../js/jquery.min.js"> </script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <style>
      p.feed {
        padding-top: 50px;
      }
      h1 {
          text-align: center;
          padding-top: 150px;
      }
    </style>
  </head>
  <body>

      <div class="container">
      <p class="feed">
      <?php
      include 'connectDB.php';
      include 'navbar.php';

      if(isset($_SESSION["username"])){
      $sql = "INSERT INTO product(product_name,product_description,quantity) VALUES('{$_POST['pdName']}','{$_POST['pdDetail']}',{$_POST['pdQuantity']})";

      if(mysqli_query($connect,$sql)){
        echo "กำลังเพิ่มรายการ<br>";
      }else{
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
      }

    }else{
      echo "<h1>NOT FOUND 404</h1>";
    }
    header("refresh: 3; url=query.php");
    exit(0);
 
      mysqli_close($connect);
      ?>
      </p>
      </div>
  </body>
</html>
