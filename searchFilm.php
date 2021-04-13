<?php
session_start();
?>
<?php 
    include("head.php")
?>
    <!-- Nav Bar -->

<body id="bodyCategory">

<article id="container">

<header>
    <nav id="nav_bar">
        <ul>
            <li>
                <a href="mainPage.php">
                    <img src="pictures/logo.png" alt="logo" class="imgNavbar">
                </a>
            </li>
            <li> 
                <h4 class="btnCategory">Category</h4>
                <div class="dropdown"> 
                    <section class="selectionMenu">
                        <a href="category/action.php">action</a>
                        <a href="category/adventure.php">adventure</a>
                        <a href="category/animation.php">animation</a>
                        <a href="category/comedy.php">comedy</a>
                        <a href="category/dramatic.php">dramatic</a>
                        <a href="category/fantasy.php">fantasy</a>
                        <a href="category/horror.php">horror</a>
                        <a href="category/science-fiction.php">Sci-fi</a>
                        <a href="category/thriller.php">thriller</a>
                    </section>
                </div>
            </li>
            <?php
            include 'searchbar.php';
            ?>
            <?php
            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            ?>
                <li>
                    <a href="logout_test.php">Log out</a>
                </li>
            <?php
            } else {
            ?>
                <li>
                    <a href="login.php">Log in</a>
                </li>
            <?php
            }
            ?>
        </ul>
    </nav>
</header>

<article id="category">

<h3>Researched movies</h3>
    <section class="action">
<?php
include 'connexion_getflix_db.php';

$researched_movie = $_POST['research_movie'];

$records = mysqli_query($conn,"select * from getflix_movies where title like '%$researched_movie%'"); // fetch data from database

$i = 1;
while($data = mysqli_fetch_array($records))
{
    $i++;
?>
<div class="movieContainer">
    <div class="hover">
        <img src="<?php echo $data['movie_image']; ?>">
    <!-- Button trigger modal -->
        <button class = "btn btn-secondary " data-toggle = "modal" data-target = "#myModal<?php echo $i ?>">
        More Info
        </button>
    </div>
<!-- Modal -->
<div class = "modal fade" id ="myModal<?php echo $i ?>" tabindex = "-1" role = "dialog" 
               aria-labelledby = "myModalLabel" aria-hidden = "true"> 
               <div class = "modal-dialog">
                  <div class = "modal-content text-white bg-dark">
                     <div class = "modal-header">
                        <h4 class = "modal-title" id = "myModalLabel">
                        <?php 
                            echo $data['title'];
                            $testId = $data['id'];
                         ?>
                        </h4>
                     </div>
                     <div class = "modal-body">
                        <?php echo $data['overview']; ?>
                     </div>
                     <div class = "modal-body">
                     <iframe width="420" height="315" src="<?php echo $data['youtube_trailer']?>"></iframe>
                     <!--https://www.youtube.com/embed/-->
                     </div>
                     <div class = "modal-footer">
                        Rating: <?php echo $data['vote_average']; ?>/10
                     </div>
                     <?php
                     $comments = mysqli_query($conn,"select * from getflix_comment where movie_id=$testId"); // fetch data from database
                     while($data_test = mysqli_fetch_array($comments))
                     {
                     ?>
                        <div class = "modal-footer">
                            <?php echo $data_test['username_comment'].(": ").$data_test['comment'];?>
                        </div>
                     <?php
                     }
                     ?>
                     <?php
                     if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                     ?>
                     <div class = "modal-footer">
                        <form action="category/comment_form.php" method="post">
                            <input name="user_comment" type="text">
                            <input name="movie_id" type="hidden" value="<?php echo $testId; ?>">
                            <button type="submit" class="btn btn-danger button1">Submit</button>
                        </form>
                    </div>
                    <?php
                    }
                    ?>
                  </div><!-- /.modal-content -->
               </div><!-- /.modal-dialog -->
            </div>
</div>
<?php
}
?>



            <?php mysqli_close($conn);  // close connection ?>
        </section>
    </article>
</article>

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