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
      p.feed{
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

      $sql = "select * from product where product_id='$_GET[id]' ";
      $result = mysqli_query($connect,$sql);

      ?>
      <form action="editproduct.php" method="post" enctype="multipart/form-data">
        <div class="container">
        <p class="feed"></p>
        <h2>แก้ไขรายการสิน้า</h2>
        <p>&nbsp;</p>
       <?php
        if(mysqli_num_rows($result)>0){
          $row=mysqli_fetch_assoc($result);
       ?>
        <div class="form-group">
        <label>ชื่อสินค้า</label>
        <input class="form-control" type="text" name="pdName" placeholder="ชื่อสินค้า" value="<?php echo $row["product_name"]  ?>">
        </div>
        <div class="form-group">
          <label>รายละเอียดสินค้า</label>
          <input class="form-control" type="text" name="pdDetail" placeholder="รายละเอียดสินค้า" value="<?php echo $row["product_description"]  ?>">
        </div>
        <div class="form-group">
          <label>จำนวนสินค้า</label>
          <input class="form-control" type="text" name="pdQuantity" placeholder="จำนวนสินค้า" value="<?php echo $row["quantity"]  ?>">
        </div>
        <input type="hidden" name="id" value="<?php echo $row["product_id"];?>">
        <?php }?>
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </div>
      </form>
      <?php  
  }else{
    ?>
    <h1>NOT FOUND 404<h1>
    <?php 
  }?>
  </body>
</html>
