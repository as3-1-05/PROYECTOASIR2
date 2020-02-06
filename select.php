<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "usuarios";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, email, username FROM login";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID: "    . $row["id"]. " - EMAIL:    " . $row["email"]. " - USUARIO:     " . $row["username"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
