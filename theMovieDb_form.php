<?php

include '/Applications/MAMP/htdocs/getflix/connexion_getflix_db.php';
	
  // Taking all 5 values from the form data(input)
  $movie_title =  $_POST['movie_title'];
  $movie_overview =  $_POST['movie_overview'];
  $movie_genre =  $_POST['movie_genre'];
  $movie_vote =  $_POST['movie_vote'];
  
  $movie_image =  $_POST['movie_image'];
  $data_image = file_get_contents($movie_image);
  $new_path_image = 'images/'.str_replace(" ", "",$movie_title.'.jpg');
  file_put_contents($new_path_image, $data_image);


	
  // Performing insert query execution 
  // here our table name is college 
  
  $sql = "INSERT INTO getflix_movies (title, overview, genre_id, vote_average, movie_image)  VALUES ('$movie_title','$movie_overview','$movie_genre','$movie_vote','$new_path_image')"; 
	
  if(mysqli_query($conn, $sql)){ 
	  echo "<h3>Data sent! Thanks</h3>";
      header("location:form_movie.php");
  } else{ 
	  echo "ERROR: Hush! Sorry $sql. " 
		  . mysqli_error($conn); 
  } 
	
  // Close connection 
  mysqli_close($conn); 
  ?>

