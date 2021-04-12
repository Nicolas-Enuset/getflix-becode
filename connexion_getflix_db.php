<?php
$servername = "localhost";
$username = "b050e88e29846e";
$password = "9301c6a8";
$db_name = "heroku_74c4190eaa09552";
$conn = mysqli_connect($servername,$username,$password,$db_name);

  // Check connection 
  if($conn === false){ 
      die("ERROR: Could not connect. " 
          . mysqli_connect_error()); 
  }
?>