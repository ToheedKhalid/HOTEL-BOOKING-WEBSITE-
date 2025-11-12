<?php
include("include/header.php"); // must include session_start() and redirect()

// Destroy session properly
session_unset();     // remove all session variables
session_destroy();   // destroy the session

// Optional: start a new session to set logout message
session_start();
$_SESSION['logout_msg'] = "You have been logged out successfully.";

// Redirect to login page
redirect('index.php');
exit; // stop script exzecution after redirect
?>
