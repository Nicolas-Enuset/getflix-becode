<?php
session_start();
?>
<?php

include '../connexion_getflix_db.php';
	
  // Taking all 5 values from the form data(input)
  $username = $_SESSION['username'];
  $user_comment = $_POST['user_comment'];
  $movie_id = $_POST['movie_id'];
 
  $sql = "INSERT INTO getflix_comment (username_comment, comment, movie_id)  VALUES ('$username','$user_comment','$movie_id')"; 
	
  if(mysqli_query($conn, $sql)){ 
	  
      header("location: action.php");
  } else{ 
	  echo "ERROR: Hush! Sorry $sql. " 
		  . mysqli_error($conn); 
  } 
	
  // Close connection 
  mysqli_close($conn); 
  ?>

