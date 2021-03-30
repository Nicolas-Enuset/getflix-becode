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

<!-- footer -->
<?php 
    include("footer.php")
?>

</body>
</html>