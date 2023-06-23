<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Format the data
  $data = "Name: " . $name . "\nEmail: " . $email . "\nMessage: " . $message . "\n\n";

  // Append the data to a text file
  $file = "contact_data.txt";
  file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

  // Redirect to a thank you page
  header("Location: thank_you.html");
  exit();
}
?>