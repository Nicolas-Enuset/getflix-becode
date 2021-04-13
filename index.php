<?php
// Include config file
include "connexion_getflix_db.php";
 
// Define variables and initialize with empty values
$first_name = $last_name = $username = $user_email = $password = $confirm_password = "";
$first_name_err = $last_name_err = $username_err = $user_email_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate first_name
    if(empty(trim($_POST["first_name"]))){
        $first_name_err = "Please enter a first name.";     
    } elseif(strlen(trim($_POST["first_name"])) < 4){
        $first_name_err = "First name must have at least 4 characters.";
    } else{
        $first_name = trim($_POST["first_name"]);
    }
    // Validate last_name
    if(empty(trim($_POST["last_name"]))){
        $last_name_err = "Please enter a last name.";     
    } elseif(strlen(trim($_POST["last_name"])) < 4){
        $last_name_err = "Last name must have at least 4 characters.";
    } else{
        $last_name = trim($_POST["last_name"]);
    }
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    // Validate email
    if(empty(trim($_POST["user_email"]))){
        $user_email_err = "Please enter an email.";     
    } elseif(strlen(trim($_POST["user_email"])) < 4){
        $user_email_err = "user_email must have at least 4 characters.";
    } else{
        $user_email = trim($_POST["user_email"]);
    }
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($first_name_err) && empty($last_name_err) && empty($username_err) && empty($user_email_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (first_name, last_name, username, user_email, password) VALUES (?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssss", $param_first_name, $param_last_name, $param_username, $param_user_email,$param_password);
            
            // Set parameters
            $param_first_name = $first_name;
            $param_last_name = $last_name;
            $param_username = $username;
            $param_user_email = $user_email;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);             }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
<?php
session_start();
?>
<?php 
    include("head.php")
?>
<title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>

<body id="bodySignup">

<!-- container pour a chaque fois garder le footer en bas de page -->
<article id="container">

<!-- nav Bar -->
    <header id="nav_bar">
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
            <h2>Sign up</h2>
    <!-- Form sign up -->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="lastNameSignUp" ></label>
                <input type="text" name="last_name" placeholder="Last name" id="lastNameSignUp" class="lastNameSignup" class="form-control <?php echo (!empty($last_name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $last_name; ?>">
                <span class="invalid-feedback"><?php echo $last_name_err; ?></span>
            <label for="firstNameSignUp" ></label>
                <input type="text" name="first_name" placeholder="First Name" id="firstNameSignUp" class="firstNameSignUp" class="form-control <?php echo (!empty($first_name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $first_name; ?>">
                <span class="invalid-feedback"><?php echo $first_name_err; ?></span>
            <label for="usernameSignUp" ></label>
                <input type="text" name="username" placeholder="Username" id="usernameSignUp" class="usernameSignUp" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            <label for="emailSignUp" ></label>
                <input type="email" name="user_email" placeholder="Email" id="emailSignUp" class="emailSignUp" class="form-control <?php echo (!empty($user_email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $user_email; ?>">
                <span class="invalid-feedback"><?php echo $user_email_err; ?></span>            
            <label for="passwordSignUp" ></label>
                <input placeholder="Password" type="password" id="passwordSignUp" class="passwordSignUp" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>            
            <label for="passwordSignUp" ></label>
            <p id="signUpConfirmPw">Confirm password :</p>
                <input placeholder="Password" type="password" id="passwordSignUp2" class="passwordSignUp" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            <label for="subscribeSignUp" id="labelSubscribeNewsletter">Subscribe to our newsletter? Check bellow then</label>
                <input type="checkbox" id="subscribeSignUp" class="subscribeSignUp" value="check">
            <button type="submit" id="btnSignUp">Sign up</button>
        </form>
    </section>
</article>

<?php 
    include("footer.php")
?>

</body>
</html>