<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $childName = $_POST["child_name"];
    $gender = $_POST["gender"];
    $disabilityType = $_POST["disability_type"];
    $age = $_POST["age"];
    $cnic = $_POST["cnic"];
    $contact = $_POST["contact"];
    $lastSeen = $_POST["last_seen"];

    // Connect to the XAMPP MySQL server
    $servername = "localhost";
    $username = "root"; // Default XAMPP MySQL username
    $password = "";     // Default XAMPP MySQL password
    $dbname = "adminpanel"; // Replace with your database name

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the SQL query
    $sql = "INSERT INTO missing_children (child_name, gender, disability_type, age, cnic, contact, last_seen) 
            VALUES ('$childName', '$gender', '$disabilityType', '$age', '$cnic', '$contact', '$lastSeen')";

    if ($conn->query($sql) === TRUE) {
        // Record inserted successfully
        header("Location: cardss.html"); // Redirect to a success page
        exit();
    } else {
        // Error inserting record
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Missing Children Information</title>

    <link rel="stylesheet" href="style.css">

    <script src="https://kit.fontawesome.com/f83c04ecb0.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container1" style="margin-bottom: 400px; margin-top: 400px;">
        <nav class="nav" style="background-color: lightslategrey;">
            <img src="./images/logooooo.png" class="logo" alt="">
            <h2 style="color: white;">Missing Angels</h2>
            <ul>
                <button><a href="signin-signup/index.php"> Login </a></button>
            </ul>
          </nav>

        <div class="wrapper" style="height: 880px; width: 500px;" >
            <h1  style="border-bottom: 8px solid black; width: 450px; margin-bottom: 50px; font-size: 36px;">Missing Child Information</h1>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="form-group">
                    <label for="username">User Name:</label>
                    <input type="text" id="name" name="child_name"  required>
                  </div>
                <div class="form-group">
                    <label for="gender">Gender:</label>
                    <select id="gender" name="gender" required>
                    <option value="">Select</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                      <option value="other">Other</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="Disability">Disability:</label>
                    <select id="Disability" name="disability_type" required>
                      <option value="">Select</option>
                      <option value="male">Normal</option>
                      <option value="female">Medical</option>
                      <option value="other">Other</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="number" id="age" name="age" min="1" max="99" pattern="[0-9]{1,2}" required>
                  </div>

                  <div class="form-group">
                    <label for="cnic">CNIC:</label>
                    <input type="tel" id="cnic" name="cnic" pattern="[0-9]{13}" onkeypress="return validateNumericInput(event, 13)" required>
                  </div>

                  <div class="form-group">
                    <label for="contact">Contact:</label>
                    <input type="tel" id="contact" name="contact" pattern="[0-9]{11}" onkeypress="return validateNumericInput(event, 11)" required>
                  </div>

                  <div class="form-group">
                    <label for="gender">Last seen:</label>
                    <select id="last seen" name="last_seen" required>
                      <option value="">Select</option>
                      <option value="city1">Peshawar</option>
                      <option value="city2">karachi</option>
                      <option value="city3">Other</option>
                    </select>
                  </div>
                <button style="background-color: darkblue;"><a href="cardss.html" style="color: white;"> Submit </a></button>         
            </form>
        </div>
    </div>
</body>
</html>