<?php
session_start();
// Connect to the database (replace 'localhost', 'username', 'password', and 'dbname' with your actual database details)
$conn = mysqli_connect('localhost', 'username', 'password', 'dbname');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Perform authentication
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // User authenticated, redirect to userpage.php passing username as query parameter
        $_SESSION['username'] = $username;
        header("Location: userpage.php");
        exit();
    } else {
        echo "Invalid username or password";
    }
}

mysqli_close($conn);
?>
