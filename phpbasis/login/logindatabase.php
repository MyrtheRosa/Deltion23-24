<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT voornaam, achternaam, userid FROM login";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "Firstname: " . $row["voornaam"] . " Lastname: " . $row["achternaam"] . " ID: " . $row["userid"] . "<br>";
    }
} else {
    echo "0 results";
}


//$sqlteoveogen = "INSERT INTO `login` (`voornaam`, `achternaam`, `userid`) VALUES ('koos', 'test', NULL)";
//$result = $conn->query($sqlteoveogen);

//$sqlweggoiien = "DELETE FROM login WHERE `login`.`userid` = 2"

$conn->close();
?>