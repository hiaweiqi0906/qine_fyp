<?php
// $con = mysqli_connect("127.0.0.1","root","","sistem-pengurusan-app", "3306");
$con = mysqli_connect("lrgs.ftsm.ukm.my","a180970","giantgraycamel","a180970");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>