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
    include 'connectDB.php';
    include 'navbar.php';

    if(isset($_SESSION["username"])){

    $sql = "SELECT product_id, product_name, product_description, quantity FROM product";
    $result = mysqli_query($connect,$sql);
  ?>
  <div class="container">
  <p class="feed"></p>
  <h2>โครงการทั้งหมด</h2>
  <p>&nbsp;</p>
  <table class="table table-striped">
   <thead>
    <tr>
     <th>ชื่อสินค้า</th>
     <th>รายละเอียดสินค้า</th>
     <th>จำนวนสินค้า</th>
     <th>แก้ไขข้อมูล</th>
     <th>ลบข้อมูล</th>
    </tr>
   </thead>
   <tbody>
    <?php
    if(mysqli_num_rows($result)>0){
      while($row = mysqli_fetch_assoc($result)){
    ?>
    <tr>
      <td><?php echo $row["product_name"];?></td>
      <td><?php echo $row["product_description"];?></td>
      <td><?php echo $row["quantity"];?></td>
      <td><a href="editform.php?id=<?php echo $row["product_id"];?>"> แก้ไขข้อมูล </a></td>
      <td><a href="deleteproduct.php?id=<?php echo $row["product_id"];?>"> ลบข้อมูล </a></td>
    </tr>
    <?php  }
    }
  }else{
    ?>
    <h1>NOT FOUND 404<h1>
    <?php 
  }
    ?>
   </tbody>
  </table>
  </div>
  </body>
</html>
