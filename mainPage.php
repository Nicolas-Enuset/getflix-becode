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
                    <img src="pictures/logo.pnj.png" alt="logo" class="imgNavbar">
                </a>
            </li>
            <li>
                <button class="btnCategory">Category</button>
                <section class="selectionMenu">
                    <!-- je dois mettre une -->
                    <a href="http://localhost/projets/PHP/Getflix/category.php"><button class="action" value="action">action</button></a>
                    <a href="http://localhost/projets/PHP/Getflix/category.php"><button class="thriller" value="thriller">thriller</button></a>
                    <a href="http://localhost/projets/PHP/Getflix/category.php"><button class="comedy" value="comedy">comedy</button></a>
                    <a href="http://localhost/projets/PHP/Getflix/category.php"><button class="sci-fi" value="sci-fi">sci-fi</button></a>
                    <a href="http://localhost/projets/PHP/Getflix/category.php"><button class="drama" value="drama">drama</button></a>
                </section>
            </li>
            <li>    
                <form action="" method="POST">
                    <input type="text" id="searchFilm" class="searchFilm">
                    <button type="submit" class="btnSearch">search</button>
                </form>
            </li>
            <li>
                <a href="login.php">Log out!</a>
            </li>
        </ul>
    </nav>
</header>
</article>
<!-- footer -->
<?php 
    include("footer.php")
?>

    <!-- lien JS -->
<script src="script.js"></script>


</body>
</html>