<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Login Admin</title>
</head>
<style>
  h1 {
    text-align: center;
    padding-top: 150px;
  }
  a {
    text-decoration: none;
  }
  p.feed {
            padding-top: 50px;
  }
  h2 {
    background-color:#343A40;
    color: #FFC107;
    text-align: center;
    padding-bottom: 30px;
    padding-top: 30px;
  }
</style>
<body>
    <?php if(isset($_SESSION['username'])){
      include 'navbar.php';
    ?>
      <h1>WELCOME <?php echo strtoupper($_SESSION['username']); ?></h1>
    <?php
    }else { ?>
      <div class="">
        <a href='./admin.php'><h2>ADMIN LOGIN</h2></a>
      </div>
      <div class="container">
         <br>
          <form class="" action="login.php" method="post">
            <table class="table">
                <tr>
                    <th>username</th>
                    <th><input type="text" name="username" class="form-control"/></th>
                </tr>
                <tr>
                    <th>password</th>
                    <th><input type="password" name="password"  class="form-control"/></th>
                </tr>
                <tr>
                    <th><input type="submit" class="btn btn-success" /></th> <!-- ตัวหน้าบอกว่าเป็นไร หลัง บอกสี -->
                    <th><input type="reset" class="btn btn-danger"/></th>
                </tr>
            </table>
          </form>
      </div>
  <?php  } ?>

<script>

  $(document).ready(function() {
     $(':input[type="submit"]').prop('disabled', true);
     $('input[type="text"]').keyup(function() {
        if($(this).val() != '') {
           $(':input[type="submit"]').prop('disabled', false);
        }
     });
 });
</script>
</body>
</html>
