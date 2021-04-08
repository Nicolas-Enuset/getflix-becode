<?php
session_start();
?>
<?php 
    include("head.php")
?>
<title>search for a film</title>

<!-- body -->
<body id="bodySearchFilm">

<!-- container pour a chaque fois garder le footer en bas de page -->
<article id="container">

    <!-- Nav Bar -->
<?php 
include("navBar.php")
?>

    <article id="filmFound">
        <section class="titleFound">
            <h3>Lorem ipsum dolor sit.</h3>
            <img src=".jpeg" alt="essai">
        </section>
        <section class="topFound">
            <p><span>actors</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis numquam ullam asperiores veritatis nobis illo!</p>
            <p><span>release date</span> 23/03/2021</p>
        </section>
        <section class="synopsisFound">
            <h4>summary</h4>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut minus repudiandae eveniet distinctio. Totam explicabo aliquid fugit, incidunt dignissimos odio dolor quisquam unde quod magnam, obcaecati commodi beatae ea suscipit?</p>
        </section>
    </article>
</article>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h3>Researched movies</h3>
    <article class="action">
<?php
include '/Applications/MAMP/htdocs/getflix/connexion_getflix_db.php';
$researched_movie = $_POST['research_movie'];

$records = mysqli_query($conn,"select * from getflix_movies where title like '%$researched_movie%'"); // fetch data from database
$i = 1;
while($data = mysqli_fetch_array($records))
{
    $i++;
?>
  <div class="movieContainer">
            <img src="<?php echo $data['movie_image']; ?>">
<!-- Button trigger modal -->
<button class = "btn btn-secondary " data-toggle = "modal" data-target = "#myModal<?php echo $i ?>">
   More Info
</button>

<!-- Modal -->
<div class = "modal fade" id ="myModal<?php echo $i ?>" tabindex = "-1" role = "dialog" 
   aria-labelledby = "myModalLabel" aria-hidden = "true">
   
   <div class = "modal-dialog">
      <div class = "modal-content">
         <div class = "modal-header">
            <h4 class = "modal-title" id = "myModalLabel">
            <?php echo $data['title']; ?>
            </h4>
         </div>
         <div class = "modal-body">
            <?php echo $data['overview']; ?>
         </div>
         <div class = "modal-footer">
            <?php echo $data['vote_average']; ?>/100
         </div>
         
      </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
  
</div><!-- /.modal -->
        </div>
<?php
}
?>



<?php mysqli_close($db);  // close connection ?>
</body>
</html>

<!-- footer -->
<?php 
    include("footer.php")
?>
<script src="../script.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>