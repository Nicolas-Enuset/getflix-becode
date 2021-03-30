<?php 
    include("head.php")
?>
<title>sign up</title>
</head>
<body id="bodySignup">

<!-- nav Bar -->
<header id="nav_bar">
    <h1>Getflix</h1>
    <nav>
        <ul>
            <li>
                <a href="mainPage.php">
                    <img src="pictures/logo.pnj.png" alt="logo">
                </a>
            </li>
            <li>
                <a href="login.php">Already registered? Login!</a>
            </li>
        </ul>
    </nav>
</header>

<section id="form_sign_up">
<!-- Form sign up -->
    <form action="" method="POST">
        <label for="lastNameSignUp">Last name</label>
            <input type="text" id="lastNameSignUp" class="lastNameSignup">
        <label for="firstNameSignUp">First name</label>
            <input type="text" id="firstNameSignUp" class="firstNameSignUp">
        <label for="usernameSignUp">Username</label>
            <input type="text" id="usernameSignUp" class="usernameSignUp">
        <label for="emailSignUp">Email</label>
            <input type="email" id="emailSignUp" class="emailSignUp">
        <label for="passwordSignUp">Password</label>
            <input type="password" id="passwordSignUp" class="passwordSignUp">
        <label for="passwordSignUp">Confirm password</label>
            <input type="password" id="passwordSignUp" class="passwordSignUp">
        <label for="subscribeSignUp">Subscribe to our newsletter</label>
            <input type="checkbox" id="subscribeSignUp" class="subscribeSignUp" value="check">
        <button type="submit" class="btnSignUp">Sign up</button>
    </form>
</section>

<!-- footer -->
<?php 
    include("footer.php")
?>

</body>
</html>
