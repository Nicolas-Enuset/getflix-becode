<?php 
    include("head.php")
?>
<title>retrieve password</title>

<!-- body -->
<body id="bodyRetrievePassword">

<!-- container pour a chaque fois garder le footer en bas de page -->
<article id="container">

    <!-- Nav Bar -->
    <?php 
        include("navBar.php")
    ?>

    <!-- form retrieve password -->
    <section id="formRetrievePassword">
        <h2>Reset password</h2>
        <hr/>
            <p>Please enter your email address to search for your account.</p>
            <form action="" method="POST">
                <label for="emailRetrievePassword">Email</label>
                    <input type="email" id="emailRetrievePassword" class="emailRetrievePassword">
                <button type="submit" class="btnRetrievePassword">Ok</button>
            </form>
    </section>

</article>
<!-- footer -->
<?php 
    include("footer.php")
?>

</body>
</html>