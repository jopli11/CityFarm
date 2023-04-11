<?php
$servername = "localhost";
$username = "23020948";
$password = "nOmLPvdyimK7";
$dbname = "db_23020948";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    $sql = "INSERT INTO newsletter_subscribers (name, email) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $name, $email);

    if ($stmt->execute()) {
        echo "<h2>Thank you for signing up, " . htmlspecialchars($name) . "!</h2>";
        echo "We will send updates to: " . htmlspecialchars($email) . "<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>
