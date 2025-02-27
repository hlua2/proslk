<?php
// Start session to keep track of user login
session_start();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Sanitize user input (optional, but recommended)
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Hardcoded credentials (replace with your database credentials check in a real application)
    $valid_username = 'user123';  // example username
    $valid_password = 'password123';  // example password

    // Check if the username and password match
    if ($username === $valid_username && $password === $valid_password) {
        
        // Store session variables for logged-in user
        $_SESSION['username'] = $username;
        
        // Redirect to a protected page (dashboard, profile, etc.)
        header('Location: dashboard.php');
        exit();
    } else {
        // Invalid credentials, display an error message
        echo "Invalid username or password. Please try again.";
    }
} else {
    // If the form was not submitted, redirect back to login page
    header('Location: index.html');
    exit(); //asldkjalksdjalksjdlaksjdiejnlknlkhnlfkhjaklsjfd
}
?>
