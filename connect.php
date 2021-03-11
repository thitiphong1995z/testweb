<?php
$conn = mysqli_connect("localhost","root","","bookstore");
// Check connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect " . mysqli_connect_error();
  }else{
    //echo "Connect to database ";
  }
  mysqli_set_charset($conn,'utf8');
?>