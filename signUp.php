<?php 
    include("head.php")
?>
<title>sign up</title>
</head>

<body id="bodySignup">

<!-- container pour a chaque fois garder le footer en bas de page -->
<article id="container">

<!-- nav Bar -->
    <header id="nav_bar">
        <h1>Getflix</h1>
        <nav>
            <ul>
                <li>
                    <a href="mainPage.php">
                        <img src="pictures/logo.png" alt="logo" class="imgNavbar">
                    </a>
                </li>
                <li>
                    <a href="login.php">Already registered? Login</a>
                </li>
            </ul>
        </nav>
    </header>

    <section id="formSignUp">
        <div id="titlesSignUp">
            <h2>Sign up</h2>
        </div>
    <!-- Form sign up -->
        <form action="" method="POST">
            <label for="lastNameSignUp" ></label>
                <input placeholder="Last name" type="text" id="lastNameSignUp" class="lastNameSignup">
            <label for="firstNameSignUp" ></label>
                <input placeholder="First Name" type="text" id="firstNameSignUp" class="firstNameSignUp">
            <label for="usernameSignUp" ></label>
                <input placeholder="Username" type="text" id="usernameSignUp" class="usernameSignUp">
            <label for="emailSignUp" ></label>
                <input placeholder="Email" type="email" id="emailSignUp" class="emailSignUp">
            <label for="passwordSignUp" ></label>
                <input placeholder="Password" type="password" id="passwordSignUp" class="passwordSignUp">
            <label for="passwordSignUp" ></label>
            <p id="signUpConfirmPw">Confirm password :</p>
                <input placeholder="Password" type="password" id="passwordSignUp" class="passwordSignUp">
            <p id="labelSubscribeNewsletter">Subscribe to our newsletter</p>
            <label for="subscribeSignUp" id="labelSubscribeNewsletter"></label>
                <input type="checkbox" id="checkboxSignUp" class="subscribeSignUp" value="check">
            <button type="submit" id="btnSignUp">Sign up</button>
        </form>
    </section>

    <!-- <section id="form_sign_up"> -->
    <!-- Form sign up -->
        <!-- <form action="" method="POST">
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
</article> -->
<!-- footer -->
<?php 
    include("footer.php")
?>

</body>
</html>
