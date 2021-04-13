<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "getflix";
$conn = mysqli_connect($servername,$username,$password,$db_name);

  // Check connection 
  if($conn === false){ 
      die("ERROR: Could not connect. " 
          . mysqli_connect_error()); 
  }
?>