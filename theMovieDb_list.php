<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<table border="2">
  <tr>
    <td>Title</td>
    <td>Overview</td>
    <td>Genres</td>
    <td>Vote Average</td>
    <td>Image</td>
    <td>Youtube trailer</td>
    <td>Submit</td>
  </tr>

  <?php 
  
$api_key = '1b49e96a9d4ee88a895f9eeda8a965d1';
$api_url ='https://api.themoviedb.org/3/movie/popular?api_key='.$api_key.'&language=en-US&page=2';
$img_url = "https://image.tmdb.org/t/p/w185//";

$json_data = file_get_contents($api_url);

$response_data = json_decode($json_data, true);

$results = $response_data['results'];


foreach($results as $key => $value) 
{
  $coma = "";
  $things_to_replace = ["'",":","-"];

  $point = ".";
  $newPoint = "";
  if ($value["genre_ids"][0] == 28) {
?>
  <tr>
    <form action="theMovieDb_form.php" method="post" enctype="multipart/form-data">
      <td>
        <input name="movie_title" type="text" value="<?php echo str_replace($things_to_replace,$coma,$value["title"]);?>">
      </td>
      <td>
        <input name="movie_overview" type="text" value="<?php echo str_replace($things_to_replace,$coma,$value["overview"]);?>">
      </td>
      <td>
        <input name="movie_genre" type="text" value="<?php echo str_replace($things_to_replace,$coma,$value["genre_ids"][0]);?>">
      </td>
      <td>
        <input name="movie_vote" type="text" value="<?php echo $value["vote_average"];?>">
      </td>
      <td>
        <input name="movie_image" type="text" value="<?php echo "https://image.tmdb.org/t/p/w185//".$value["poster_path"];?>">
        <img src="<?php echo "https://image.tmdb.org/t/p/w185//".$value["poster_path"];?>" alt="">
      </td>
      <td>
        <?php 
        $movieId = $value["id"];
        $api_key = '1b49e96a9d4ee88a895f9eeda8a965d1';
        $api_url_two ='https://api.themoviedb.org/3/movie/'.$movieId.'/videos?api_key='.$api_key.'&language=en-US';

        $json_data_two = file_get_contents($api_url_two);
        $response_data_two = json_decode($json_data_two, true);

        $key_video = $response_data_two['results'][0]['key'];
        $youtube_link = "https://www.youtube.com/embed/$key_video";
        ?>
        <input name="movie_vote" type="text" value="<?php echo $youtube_link;?>">
      </td>
      <td><button type="submit" class="btn btn-danger button1">Submit</button></td>
    </form>
  </tr>
<?php
}
}
?>

</table>

</body>
</html>


