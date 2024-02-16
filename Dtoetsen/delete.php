<?php

$idvandeartiest = $_GET['id'];

$sql = "DELETE FROM artist WHERE id = $idvandeartiest";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "top2000";

//Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//Check connection
if ($conn->connect_error) {
    die("Connection Failed" . $conn->connect_error);
}

if (mysqli_query($conn, $sql) == 0) {
    echo "ERROR: " . $sql . "<br>" . mysqli_error($conn);
} else {
    header("Location: dtoetssql.php");
}

?>