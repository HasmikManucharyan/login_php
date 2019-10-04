<!DOCTYPE html>
<html>
 <head>
   <title>!DOCTYPE</title>
   <meta charset="utf-8">
   <link rel="stylesheet" href="style.css">
 </head>
 <body>
  <h2>Test Task</h2>
<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form action="login.php" method="post">
            <h1>Create Account</h1>
            <input type="text" placeholder="Name" name="name" />
            <input type="email" placeholder="Email" name="email" />
            <input type="text" placeholder="Enter Message"  name="message" />
            <input type="hidden" name="request" value="register">
            <button type="submit" id="regBtn">Sign Up</button>
        </form>
    </div>
    <div class="form-container sign-in-container">
        <form action="login.php" method="post">
            <h1>Sign in</h1>            
            <input type="name" placeholder="Name" name="name" />
            <input type="email" placeholder="Email" name="email" />
            <input type="hidden" name="request" value="login">
            <button type="submit" id="logBtn">Sign In</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Welcome Back!</h1>
                <p>To keep connected with us please login with your personal info</p>
                <button class="ghost" id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Hello, Friend!</h1>
                <p>Enter your personal details and start journey with us</p>
                <button class="ghost" id="signUp">Sign Up</button>
            </div>
        </div>
    </div>
</div>

<footer>
    <p>
       Test task Created by Hasmik Manucharyan 03.10.2019
    </p>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>
 </body> 
</html>