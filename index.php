<?php 
session_start();
if(isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in || Sign up from</title>
    <!-- font awesome icons -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />-->
    <link rel="stylesheet" href="../../../fontawesome-free-6.2.1-web/css/all.css">
    <!-- css stylesheet -->
    <link rel="stylesheet" href="./style.css">
</head>
<body>


    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="signup.php" method="POST">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                <div class="infield">
                    <i class="fas fa-user" id="icons"></i>
                    <input type="text" placeholder="User Name" name="username" required>
                    <label></label>
                </div>
                <div class="infield">
                    <i class="fas fa-envelope" id="icons"></i>
                    <input type="email" placeholder="Email" name="email" required>
                    <label></label>
                </div>
                <div class="infield">
                    <input type="password" placeholder="Password (8-16 Char.)" name="password" minlength="8" maxlength="16" required>
                    <i id="eye" class="fas fa-eye"></i>
                    <label></label>
                </div>
                <p>Select user Image:</p>
                <input type="file" name="image"required>
                   
                <button name="signup">Submit</button>
                <div id="reso">
                    <p class="animation_forms">Already have an account <a href=" ">LOGIN</a></p>
                </div>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="login.php" method="POST">
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your account</span>
                <div class="infield">
                    <i class="fas fa-envelope" id="icons"></i>
                    <input type="email" placeholder="Email" name="email" required>
                    <label></label>
                </div><br>
                <div class="infield">
                    <input type="password" name="password" placeholder="Password (8-16 Char.)" minlength="8" maxlength="16" required>
                    <i id="eye" class="fas fa-eye"></i>
                    <label></label>
                </div>
                <a href="../error/./error.html" class="forgot">Forgot your password?</a>
                <button>Log In</button>
                <div id="reso">
                    <p class="animation_forms">Don't have an account ?<a href="#">SIGNUP</a></p>
                </div>
            </form>
        </div>
        <div class="overlay-container" id="overlayCon">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome   Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button style="margin-top: 5%;">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello,🖐️ Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button>SIGN UP</button>
                </div>
            </div>
            <button id="overlayBtn"></button>
        </div>
    </div>

    <script src="./script.js"></script>

</body>
</html>
