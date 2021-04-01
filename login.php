<?php 
    include("head.php")
?>
<title>login</title>
</head>

<!-- body -->
<body id="bodyLogin">

<!-- nav Bar -->
<header>
    <h1></h1>
    <nav id="nav_bar">
        <ul>
            <li>
                <a href="signUp.php">
                    <img src="pictures/logoTransparentWhite.png" alt="logo">
                </a>
            </li>
        </ul>
    </nav>
</header>

<!-- form login -->
<section id="formLogin">
    <h2 id="h2Login">Login</h2>
    <form action="" method="POST">
        <label for="usernameLogin"></label>
            <input type="text" id="usernameLogin" placeholder="pseudo" class="usernameLogin">
        <label for="passwordLogin"></label>
            <input type="password" id="passwordLogin" placeholder="password" class="passwordLogin">
        <button type="submit" id="btnSignIn">Login</button>
    </form>
    <p id="paragraphNoAccountYet">You don't have an account yet ? <a id="linkToSignUpPage" href="signUp.php">Sign up here.</a> </p>
</section>
<!-- footer -->
<?php 
    include("footer.php")
?>

</body>
</html>
   
