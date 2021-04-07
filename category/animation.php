<?php
session_start();
?>
<?php 
    include("../head.php")
?>
<title>Animation</title>
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
                <a href="mainPage.php">
                    <img src="../pictures/logo.png" alt="logo" class="imgNavbar">
                </a>
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

    <section id="category">
        <h3>Animation</h3>
        <!-- films correspondant à la category qui seront display en flex-->
    </section>
</article>
<!-- footer -->
<?php 
    include("../footer.php")
?>

<script src="../script.js"></script>

</body>
</html>