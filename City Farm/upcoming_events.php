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

// Fetch data from a sample table called 'events'
$sql = "SELECT id, event_name, event_date, event_description FROM events ORDER BY event_date";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<h2>Upcoming Events</h2>";
  // Output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Event: " . $row["event_name"]. " - Date: " . $row["event_date"]. " - Description: " . $row["event_description"]. "<br>";
  }
} else {
  echo "No upcoming events.";
}
$conn->close();
?>
