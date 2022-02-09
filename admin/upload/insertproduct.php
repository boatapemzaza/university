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

  <?php
    include 'navbar.php';

    if(isset($_SESSION["username"])){
  ?>

  <div class="container">
    <form action="uploaddata.php" method="post" enctype="multipart/form-data"> <!-- การส่งไฟล์รูปภาพต้องใช้ entype  -->
        <div style="margin-left:10px;">
        <p class="feed">
        <h2>ข้อมูลและรายละเอียด</h2>
        <p>&nbsp</p>
        </p>
        <div class="form-group">
          <label>ชื่อสินค้า</label>
          <input class="form-control" type="text" name="pdName" placeholder="ชื่อสินค้า">
        </div>
        <div class="form-group">
          <label>รายละเอียดสินค้า</label>
          <input class="form-control" type="text" name="pdDetail" placeholder="รายละเอียดสินค้า">
        </div>
        <div class="form-group">
          <label>จำนวนสินค้า</label>
          <input class="form-control" type="text" name="pdQuantity" placeholder="จำนวนสินค้า">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
  </div>
  <?php
    }else{
  ?>
    <h1>NOT FOUND 404<h1>
  <?php 
  }
  ?>

  </body>
</html>
