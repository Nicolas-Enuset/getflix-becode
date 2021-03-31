<?php 
    include("head.php")
?>
<title>Main page</title>
</head>

<!-- body -->

<body id="bodyMainPage">

<!-- Nav Bar -->
<header>
    <nav id="nav_bar">
        <ul>
            <li>
                <a href="mainPage.php">
                    <img src="pictures/logo.pnj.png" alt="logo">
                </a>
            </li>
            <li>
                <button class="btnCategory">Category</button>
                <section class="selectionMenu">
                    <!-- je dois mettre une -->
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
                    <button type="submit" class="btnSearch">search</button>
                </form>
            </li>
            <li>
                <a href="login.php">Log out!</a>
            </li>
        </ul>
    </nav>
</header>

>>>>>>> 012da4c6da9e8d6fda19b3a5240b119c884995a4
<!-- footer -->
<?php 
    include("footer.php")
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
</body>
</html>