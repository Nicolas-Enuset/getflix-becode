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
    <header>
    <nav id="nav_bar">
        <ul>
            <li>
                <a href="mainPage.php">
                    <img src="pictures/logo.png" alt="logo" class="imgNavbar">         
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

<!-- footer -->
<?php 
    include("footer.php")
?>

</body>
</html>