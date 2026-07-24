<?php
$conn = new mysqli("localhost", "root", "", "dermatology_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_POST['id'];
$appointment_date = $_POST['appointment_date'];

$sql = "UPDATE appointments SET appointment_date='$appointment_date' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: old-history.php");
    exit();
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>