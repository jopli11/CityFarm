<?php
// Connect to database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get user input from form
$visit_date = $_POST['visit_date'];

// Save input to database
$sql = "INSERT INTO visits (visit_date) VALUES ('$visit_date')";

if (mysqli_query($conn, $sql)) {
  echo "Your preferred visit date has been saved!";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>
