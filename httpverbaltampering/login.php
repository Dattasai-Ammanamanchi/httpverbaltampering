<?php
// Simulating user validation
$validUsers = array(
  array('username' => 'user1', 'password' => 'password1'),
  array('username' => 'user2', 'password' => 'password2'),
  // ...
);

// Retrieve the submitted username and password
$username = $_POST['username'];
$password = $_POST['password'];

// Check if the submitted credentials are valid
$authenticated = false;
foreach ($validUsers as $user) {
  if ($user['username'] === $username && $user['password'] === $password) {
    $authenticated = true;
    break;
  }
}

if ($authenticated) {
  // Generate a session for the authenticated user
  session_start();
  $_SESSION['username'] = $username;
  
  // Redirect the user to their profile page
  header("Location: profile.php");
  exit();
} else {
  // Redirect the user back to the login page with an error message
  header("Location: index.html?error=1");
  exit();
}
?>
