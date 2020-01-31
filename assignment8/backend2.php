
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rutu";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    $roll = $_GET['roll'];
    $name = $_GET['namei'];
        $sql = "INSERT INTO student VALUES($roll,'$name')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>