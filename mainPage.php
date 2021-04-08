<?php
session_start();
?>
<?php 
    include("head.php")
?>
<title>Main page</title>
</head>

<!-- body -->

<body id="bodyMainPage">
<!-- container pour a chaque fois garder le footer en bas de page -->
<article id="container">

<!-- Nav Bar -->
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
                    <ul class="selectionMenu">
                        <li><a href="category/action.php">action</a></li>
                        <li><a href="category/adventure.php">adventure</a></li>
                        <li><a href="category/animation.php">animation</a></li>
                        <li><a href="category/crime.php">crime</a></li>
                        <li><a href="category/dramatic.php">dramatic</a></li>
                        <li><a href="category/fantasy.php">fantasy</a></li>
                        <li><a href="category/horror.php">horror</a></li>
                        <li><a href="category/science-fiction.php">Sci-fi</a></li>
                        <li><a href="category/thriller.php">thriller</a></li>
                    </ul>
                </div>
            </li>
            <?php
            include ("searchbar.php");
            ?>
            <li class="navLogout">
                <a href="login.php">Log out</a>
            </li>
        </ul>
    </nav>
</header>

<!--Carrousel 1-->
<div class="categoryList">
    <div class="categoryItem">
        <div  id="carousel1" class="carousel slide  h-100" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel1" data-slide-to="1"></li>
                <li data-target="#carousel1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active ">
                    <img class="img-fluid w-100" src="" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Titre 1</h5>
                        <p>Blablablablablablabla</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid w-100" src="" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Titre 2</h5>
                        <p>Blablablablablablabla</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid w-100" src="" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Titre 3</h5>
                        <p>Blablablablablablabla</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
    
        </div>
            <div class="categoryDescription">
                <h2>Most popular movies</h2>
            </div>
    </div>

    <!--Carrousel 2-->
    <div class="categoryItem">
        <div  id="carousel2" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel2" data-slide-to="0" class="active"></li>
                <li data-target="#carousel2" data-slide-to="1"></li>
                <li data-target="#carousel2" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="Images/Galerie/WPetit.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Titre 1</h5>
                        <p>Blablablablablablabla</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Titre 2</h5>
                        <p>Blablablablablablabla</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="Images/Contact.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Titre 3</h5>
                        <p>Blablablablablablabla</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
    
        </div>
        <div class="categoryDescription">
            <h2>Top rated</h2>
        </div>
    </div>
    <!--Carrousel 3-->
    <div class="categoryItem">
        <div  id="carousel3" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="Images/Galerie/WPetit.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Titre 1</h5>
                        <p>Blablablablablablabla</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="Images/Galerie/benjamin-wedemeyer-fwafgljc0f0-unsplash.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Titre 2</h5>
                        <p>Blablablablablablabla</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="Images/Contact.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Titre 3</h5>
                        <p>Blablablablablablabla</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel3" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel3" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <ol class="carousel-indicators">
                <li data-target="#carousel3" data-slide-to="0" class="active"></li>
                <li data-target="#carousel3" data-slide-to="1"></li>
                <li data-target="#carousel3" data-slide-to="2"></li>
            </ol>
        </div>
        <div class="categoryDescription">
            <h2>Upcoming movies</h2>
        </div>
    </div>
</div>
</article>

<!--class="bg-dark"-->

<!-- footer -->
<?php 
    include("footer.php")
?>

    <!-- lien JS -->
<script src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>