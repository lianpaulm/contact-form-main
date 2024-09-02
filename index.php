<?php
require "./config/db_connect.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $errors = [];


  // Validate First Name
  if (empty(trim($_POST['first_name']))) {
    $errors['first_name'] = "First name is required.";
  } else {
    $first_name = htmlspecialchars($_POST["first_name"]);
  }

  // Validate Last Name
  if (empty(trim($_POST['last_name']))) {
    $errors['last_name'] = "Last name is required.";
  } else {
    $last_name = htmlspecialchars($_POST["last_name"]);
  }

  // Validate Email
  if (empty(trim($_POST['email']))) {
    $errors['email'] = "Email is required.";
  } else {
    $email = htmlspecialchars($_POST["email"]);
  }

  // Validate Message
  if (empty(trim($_POST['message']))) {
    $errors['message'] = "Message is required.";
  } else {
    $message = htmlspecialchars($_POST["message"]);
  }


  $query_type = htmlspecialchars($_POST['query_type']);
  $consent = isset($_POST['consent']) ? 1 : 0;
  $created_at = date("Y-m-d H:i:s");

  if (empty($errors)) {
    $query = "INSERT INTO contact_us (first_name,last_name,email,query_type,message,consent,created_at) VALUES ('$first_name','$last_name','$email','$query_type','$message','$consent','$created_at')";

    $result = mysqli_query($conn, $query);

    if ($result) {
      echo "Message Sent!";
    } else {
      echo "Query Failed";
    }
  }

  mysqli_close($conn);
}


require 'index.view.php';
