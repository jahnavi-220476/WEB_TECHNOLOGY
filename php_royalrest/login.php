<?php
$email = $_POST['email'];
$password = $_POST['password'];

$conn = new mysqli("localhost", "root", "", "user");

if ($conn->connect_error) {
    die("Connection failed");
}

$sql = "SELECT * FROM royal_data WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();

    
    if ($password == $row['PASSWORD']) {
        echo "Login successful! Welcome " . $row['USERNAME'];
    } else {
        echo "Invalid password!";
    }
} else {
    echo "User not found!";
}

$conn->close();
?>
