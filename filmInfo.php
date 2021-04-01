<?php 
    include("head.php")
?>
<title>film information</title>
</head>

<!-- body -->
<body id="bodyFilmInfo">

<!-- container pour a chaque fois garder le footer en bas de page -->
<article id="container">

    <!-- Nav Bar -->
    <?php 
        include("navBar.php")
    ?>

    <article id="filmInfo">
        <section class="titleImage">
            <h3>Lorem ipsum dolor sit.</h3>
            <img src=".jpeg" alt="essai">
        </section>
        <section class="topInfo">
            <p><strong>actors</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis numquam ullam asperiores veritatis nobis illo!</p>
            <p><strong>release date</strong> 23/03/2021</p>
        </section>
        <section class="synopsis">
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