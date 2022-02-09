<?php
/*
$db_config = array(
  "host"=>"localhost",
  "user"=>"root",
  "pass"=>"",
  "dbname"=>"work",
  "charset"=>"utf8"

);*/


$db_config = array(
  "host"=>"localhost",
  "user"=>"makecode_IACpongslod",
  "pass"=>"aKIZf)eSuSFG6",
  "dbname"=>"makecode_IACpongslod",
  "charset"=>"utf8"

);


$connect = @new mysqli($db_config["host"],$db_config["user"],$db_config["pass"],$db_config["dbname"]);
if(mysqli_connect_error()){
  die('Connect Error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
  exit;
}

?>
