<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "user";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " );
}

// Global variable for database connection


// Function to insert user and count registrations
function registerUser($username, $email, $password)
{
    global $conn;   // global variable usage (lab requirement)
    static $count = 0;  // static variable (registration count)

    // Insert query
    $sql = "INSERT INTO royal_data (username, email, password)
            VALUES ('$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        $count++;   // increase registration count
        echo "Registration successful <br>";
        echo "Total registrations in this request: " . $count;
        return true;   // boolean success
    } else {
        return false;  // boolean failure
    }
}

// Receive form data using POST
$username = $_POST['username'];
$email    = $_POST['email'];
$password = $_POST['password'];

// Call function
registerUser($username, $email, $password);

// Close connection
$conn->close();
?>








