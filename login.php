<?php
session_start();
?>
<?php 
    include("head.php")
?>
<title>login</title>
</head>

<!-- body -->
<body id="bodyLogin">

<!-- container pour a chaque fois garder le footer en bas de page -->
<article id="container">

<!-- nav Bar -->
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

    <!-- form login -->
    <section id="formLogin">
        <h2 id="h2Login">Login</h2>
        <form action="connexion.php" method="POST">
            <label for="usernameLogin"></label>
                <input type="text" name="pseudo" id="usernameLogin" placeholder="pseudo" class="usernameLogin">
            <label for="passwordLogin"></label>
                <input type="password" name="mdp" id="passwordLogin" placeholder="password" class="passwordLogin">
            <button type="submit" name="connexion" value="Connexion" id="btnSignIn">Login</button>
        </form>
        <p id="paragraphNoAccountYet">You don't have an account yet ? <a id="linkToSignUpPage" href="signUp.php">Sign up here.</a> </p>
    </section>

</article>

<!-- footer -->
<?php 
    include("footer.php")
?>

</body>
</html>
   