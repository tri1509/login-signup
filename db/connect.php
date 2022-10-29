<?php 
$conn = mysqli_connect('localhost','root','','unitop');
if(!$conn) {
  echo "kết nối không thành công".mysqli_connect_error();
  die();
}