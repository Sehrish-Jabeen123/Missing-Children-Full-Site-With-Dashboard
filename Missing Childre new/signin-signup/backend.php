
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
        <h1>Hi There For Input Validation</h1>
       
        <p style="text-align: center;">Welcome to Validation For SIGNUP and SIGIN of missing children website. <br></p>
        <!-- <p style="text-align: center;">Welcome to Validation For SIGNUP and SIGIN of missing children website. <br>
        You can trust our team by reporting any missing<br>
       children.<br>
       If you find any child, you can contact us through email <br>
       or through any social media platform.<br>
      </p> -->
      
      <?php
// Establish a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adminpanel";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Handle login form submission
if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query the database for the user with the provided email
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        if(password_verify($password, $user['password'])) {
            // Successful login, redirect to the desired page
            header("Location: ../first.html");
            exit;
        } else {
            // Invalid password, display error message
            echo '<p style="color: black; font-weight: bold;">Wrong password! Please try again.</p>';
        }
    } else {
        // User not found, display error message
        echo '<p style="color: black; font-weight: bold;">An account with this email address does not exist!</p>';
    }
}

// Handle registration form submission
if(isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the email already exists in the database
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0) {
        // Email already registered, display error message
        echo '<p style="color: black; font-weight: bold;">An account with this email address already exists!</p>';
    } else {
        // Hash the password for security
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insert the new user into the database
        $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashedPassword')";
        mysqli_query($conn, $query);

        // Successful registration, redirect to the desired page
        header("Location: index.php");
        exit;
    }
}

// $to = 'recipient@example.com';
// $subject = 'Test Email';
// $message = 'This is a test email from PHP mail() function.';
// $headers = 'From: your-email@example.com' . "\r\n" .
//            'Reply-To: your-email@example.com' . "\r\n" .
//            'X-Mailer: PHP/' . phpversion();

// if (mail($to, $subject, $message, $headers)) {
//     echo 'Email sent successfully!';
// } else {
//     echo 'Email could not be sent.';
// }



// Close the database connection
mysqli_close($conn);
?>


<h2 style="text-align: center;">THANK YOU</h2>
<!-- partial:index.partial.html -->
<!-- <nav class="main-nav">
	<ul>
		<li><a class="signin" href="#0">Sign in</a></li>
		<li><a class="signup" href="#0">Sign up</a></li>
	</ul>
</nav> -->

<!-- <div class="user-modal">
		<div class="user-modal-container">
			<ul class="switcher">
				<li><a href="#0">Sign in</a></li>
				<li><a href="#0">New account</a></li>
			</ul>	
		</div>
	</div> -->
<!-- partial -->
</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
