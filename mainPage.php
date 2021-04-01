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
                <button class="btnCategory">Category</button>
                <section class="selectionMenu">
                    <button class="action" value="action">action</button>
                    <button class="thriller" value="thriller">thriller</button>
                    <button class="comedy" value="comedy">comedy</button>
                    <button class="sci-fi" value="sci-fi">sci-fi</button>
                    <button class="drama" value="drama">drama</button>
                </section>
            </li>
            <li>    
                <form action="" method="POST">
                    <input type="text" id="searchFilm" class="searchFilm">
                    <button type="submit" class="btnSearch"><i class="fas fa-paper-plane"></i></button>
                </form>
            </li>
            <li>
                <a href="login.php">Log out</a>
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