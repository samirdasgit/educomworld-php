<?php
$conn_server = "localhost";
$conn_username = "root";
$conn_password = "";
$conn_database = "test";

$conn = mysqli_connect($conn_server,$conn_username,$conn_password,$conn_database);
if (!$conn) { die("Connection failed: " . mysqli_connect_error()); }

$getData=mysqli_query($conn,"SELECT * FROM `account_master` WHERE `stat`=1 LIMIT 10");
while($rowData=mysqli_fetch_array($getData)) {
  echo "<pre>";
  print_r($rowData);
  echo "</pre>";
}
?>