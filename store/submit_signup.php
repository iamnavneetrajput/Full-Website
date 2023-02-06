<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $rePassword = $_POST['re-password'];
  $otp = $_POST['otp'];

  if ($username === '') {
    die('Username is required');
  }

  if ($email === '') {
    die('Email is required');
  }

  if ($password === '') {
    die('Password is required');
  }

  if ($password !== $rePassword) {
    die('Passwords do not match');
  }

  if ($otp === '') {
    die('OTP is required');
  }

  // Perform OTP verification

  // Hash the password for security
  $password = password_hash($password, PASSWORD_DEFAULT);

  // Connect to database
  $conn = new mysqli('localhost', 'root', '', 'store');
  if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
  }

  // Insert data into database
  $sql = "INSERT INTO users (username, email, password)
    VALUES ('$username', '$email', '$password')";

  if ($conn->query($sql) === TRUE) {
    echo "Sign up successful";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}

?>
