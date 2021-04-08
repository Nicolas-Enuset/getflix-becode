<?php
session_start();
?>
<?php 
    include("../head.php")
?>
<title>apache_get_version</title>
</head>

<!-- body -->
<body id="bodyCategory">

<!-- container pour a chaque fois garder le footer en bas de page -->
<article id="container">

<!-- Nav Bar -->
<header>
    <nav id="nav_bar">
        <ul>
            <li>
                <a href="../mainPage.php">
                    <img src="../pictures/logo.png" alt="logo" class="imgNavbar">
                </a>
            </li>
            <li> 
                <h4 class="btnCategory">Category</h4>
                    <div class="dropdown"> 
                        <ul class="selectionMenu">
                            <li><a href="action.php">action</a></li>
                            <li><a href="adventure.php">adventure</a></li>
                            <li><a href="animation.php">animation</a></li>
                            <li><a href="crime.php">crime</a></li>
                            <li><a href="dramatic.php">dramatic</a></li>
                            <li><a href="fantasy.php">fantasy</a></li>
                            <li><a href="horror.php">horror</a></li>
                            <li><a href="science-fiction.php">Sci-fi</a></li>
                            <li><a href="thriller.php">thriller</a></li>
                        </ul>
                    </div>
            </li>
            <?php
            include ("searchbar_cat_folder.php");
            ?>
            <li class="navLogout">
                <a href="login.php">Log out</a>
            </li>
        </ul>
    </nav>
</header>

    <section id="category">
        <h3>Action</h3>
        <!-- films correspondant à la category qui seront display en flex-->
        <article class="action">
        <?php
        include '../../connexion_getflix_db.php';
        $records = mysqli_query($conn,"select * from getflix_movies where genre_id='28'"); // fetch data from database
        $i = 1;
        while($data = mysqli_fetch_array($records))
        {
            $i++;
        ?>
        <div class="movieContainer">
            <img src="../<?php echo $data['movie_image']; ?>">
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
</article>
</section>
    </section>
</article>

<!-- Movies -->





<!-- footer -->
<?php 
    include("../footer.php")
?>

<script src="../script.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>