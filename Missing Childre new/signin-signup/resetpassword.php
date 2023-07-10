
<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adminpanel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST['email'];
    
    // Perform any necessary data validation and sanitization here
    
    // Check if an account with the provided email exists
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // Account exists, perform password reset logic here
        // You can send a password reset email to the user with a unique token or generate a new password and send it directly
        
        // Redirect to a success page or display a success message
        header("Location: ../first.html");
        exit();
    } else {
        // No account exists with the provided email
        echo "An account with this email does not exist!";
    }
}

$conn->close();
?>

