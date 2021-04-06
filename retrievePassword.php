<?php 
    include("head.php")
?>
<title>retrieve password</title>

<!-- body -->
<body id="bodyRetrievePassword">

<!-- container pour a chaque fois garder le footer en bas de page -->
<article id="container">

    <!-- Nav Bar -->
    <header>
        <nav id="nav_bar">
            <ul>
                <li>
                    <a href="signUp.php">
                        <img src="pictures/logo.png" alt="logo" class="imgNavbar">
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- form retrieve password -->
    <section id="formRetrievePassword">
            <h2 id="h2RetrievePW">Reset password</h2>
            <p id="instructionPrgrph">Please enter your email address to search for your account.</p>
            <form action="" method="POST">
                <label for="emailRetrievePassword"></label>
                    <input placeholder="Email" type="email" id="emailRetrievePassword" class="emailRetrievePassword">
                <button type="submit" class="btnRetrievePassword" id="btnRetrievePW">Send</button>
            </form>
    </section>

</article>
<!-- footer -->
<?php 
    include("footer.php")
?>

</body>
</html>