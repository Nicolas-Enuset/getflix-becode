<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>All Movies</h2>

<table border="2">
  <tr>
    <td>id</td>
    <td>Title</td>
    <td>Overview</td>
    <td>Genres</td>
    <td>Vote</td>
    <td>Image</td>
    <td>Delete</td>
  </tr>

<?php
include 'C:/xampp/htdocs/projets/PHP/connexion_getflix_db.php';


$records = mysqli_query($conn,"select * from getflix_movies"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['title']; ?></td>
    <td><?php echo $data['overview']; ?></td>
    <td><?php echo $data['genre_id']; ?></td>
    <td><?php echo $data['vote_average']; ?></td>
    <td><img src="<?php echo $data['movie_image']; ?>" width="100" height="100"></td>
    <td><a href="delete_movie.php?id=<?php echo $data['id']; ?>">Delete</a></td>
  </tr>	
<?php
}
?>

</table>

<?php mysqli_close($db);  // close connection ?>
</body>
</html>