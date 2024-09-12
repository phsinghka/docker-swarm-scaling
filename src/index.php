<?php
// Include the database connection
include 'db.php';

// Fetch data from the MySQL database
$query = "SELECT message FROM messages LIMIT 1";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // Output the data
    $row = $result->fetch_assoc();
    echo "<h1>" . $row['message'] . "</h1>";
} else {
    echo "<h1>No messages found!</h1>";
}
?>

