<?php
// Start the session
session_start();

// Destroy all session data
session_unset();
session_destroy();

// Redirect to the signup page
header("Location: ../signup.html");
exit();
?>
