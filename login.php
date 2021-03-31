<?php 
    include("head.php")
?>
<title>login</title>
</head>

<!-- body -->
<body id="bodyLogin">

<!-- nav Bar -->
<header>
    <h1>Getflix</h1>
    <nav id="nav_bar">
        <ul>
            <li>
                <a href="signUp.php">
                    <img src="pictures/logo.pnj.png" alt="logo">
                </a>
            </li>
            <li>
                <a href="signUp.php">sign up here!</a>
            </li>
        </ul>
    </nav>
</header>

<!-- form login -->
<section id="formLogin">
    <form action="" method="POST">
        <label for="usernameLogin">Username</label>
            <input type="text" id="usernameLogin" class="usernameLogin">
        <label for="passwordLogin">Password</label>
            <input type="password" id="passwordLogin" class="passwordLogin">
        <button type="submit" class="btnSignIn">Login</button>
    </form>
</section>
<!-- footer -->
<?php 
    include("footer.php")
?>

</body>
</html>
   
