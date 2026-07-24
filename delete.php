<?php
$conn = new mysqli("localhost", "root", "", "dermatology_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];

$sql = "DELETE FROM appointments WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: old-history.php");
    exit();
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>