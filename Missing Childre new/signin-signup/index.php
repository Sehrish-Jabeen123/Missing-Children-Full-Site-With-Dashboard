<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login and Registration Form Example</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
	<div class="content" >
        <h1>Welcome To missing Angels</h1>
        <p style="text-align: center;">Hello.. Welcome to missing children website. <br>
        You can trust our team by reporting any missing<br>
       children.<br>
       If you find any child, you can contact us through email <br>
       or through any social media platform.<br>
      </p>
      <h2 style="text-align: center;">THANK YOU</h2>
<!-- partial:index.partial.html -->
<nav class="main-nav">
	<ul>
		<li><a class="signin" href="#0">Sign in</a></li>
		<li><a class="signup" href="#0">Sign up</a></li>
	</ul>
</nav>

<div class="user-modal">
		<div class="user-modal-container">
			<ul class="switcher">
				<li><a href="#0">Sign in</a></li>
				<li><a href="#0">New account</a></li>
			</ul>

			<div id="login">
			<form class="form" method="POST" action="backend.php">
    <p class="fieldset">
        <label class="image-replace email" for="signin-email">E-mail</label>
        <input class="full-width has-padding has-border" name="email" id="signin-email" type="email" placeholder="E-mail">
        <span class="error-message">An account with this email address does not exist!</span>
    </p>

    <p class="fieldset">
        <label class="image-replace password" for="signin-password">Password</label>
        <input class="full-width has-padding has-border" name="password" id="signin-password" type="password" placeholder="Password">
        <a href="#0" class="hide-password">Show</a>
        <span class="error-message">Wrong password! Try again.</span>
    </p>

    <p class="fieldset">
        <button type="submit" name="login">Login</button>
    </p>
</form>

<script>
    document.querySelector('.form').addEventListener('submit', function(event) {
        var email = document.getElementById("signin-email").value;
        var password = document.getElementById("signin-password").value;

        if (email.trim() === "" || password.trim() === "") {
            event.preventDefault(); // Prevent form submission
            alert("Please fill in all the fields.");
        }
        
        // Other validation logic if needed
    });
</script>

				
				<!-- <p class="form-bottom-message" style="margin-bottom: 20px;"><a href="#0">Forgot your password?</a></p>
				<a href="#0" class="close-form">Close</a> -->
			</div>

			<div id="signup">
			<form class="form" method="POST" action="backend.php" onsubmit="return validateForm()">
    <p class="fieldset">
        <label class="image-replace username" for="signup-username">Username</label>
        <input class="full-width has-padding has-border" name="username" id="signup-username" type="text" placeholder="Username" required>
        <span class="error-message">Your username can only contain alphanumeric symbols!</span>
    </p>

    <p class="fieldset">
        <label class="image-replace email" for="signup-email">E-mail</label>
        <input class="full-width has-padding has-border" name="email" id="signup-email" type="email" placeholder="E-mail" required>
    </p>

    <p class="fieldset">
        <label class="image-replace password" for="signup-password">Password</label>
        <input class="full-width has-padding has-border" name="password" id="signup-password" type="password" placeholder="Password" required>
        <a href="#0" class="hide-password">Show</a>
        <span class="error-message">Your password has to be at least 6 characters long!</span>
    </p>

    <p class="fieldset">
        <button type="submit" name="register">Create Account</button>
    </p>
</form>

<script>
    function validateForm() {
        var username = document.getElementById("signup-username").value;
        var email = document.getElementById("signup-email").value;
        var password = document.getElementById("signup-password").value;

        var usernameRegex = /^[a-zA-Z0-9]+$/;

        if (username.trim() === "" || !usernameRegex.test(username)) {
            alert("Please enter a valid username. It should only contain alphanumeric symbols.");
            return false;
        }

        if (email.trim() === "") {
            alert("Please enter your email.");
            return false;
        }

        if (password.trim().length < 6) {
            alert("Please enter a password with at least 6 characters.");
            return false;
        }

        return true;
    }
</script>

				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div>

			<div id="reset-password">
				<p class="form-message">Lost your password? Please enter your email address.</br> You will receive a link to create a new password.</p>

				<form class="form">
					<p class="fieldset">
						<label class="image-replace email" for="reset-email">E-mail</label>
						<input class="full-width has-padding has-border" name="email" id="reset-email" type="email" placeholder="E-mail">
						<span class="error-message">An account with this email does not exist!</span>
					</p>

					<p class="fieldset">
						<input class="full-width has-padding" name="reset-password" type="submit" value="Reset password">
					</p>
				</form>

				<p class="form-bottom-message"><a href="#0">Back to log-in</a></p>
			</div>
			<a href="#0" class="close-form">Close</a>
		</div>
	</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
