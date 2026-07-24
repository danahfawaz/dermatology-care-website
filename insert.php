<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dermatology_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$patientname = $_POST['patientname'];
$doctor = $_POST['doctor'];
$skincondition = $_POST['skincondition'];
$appointment_date = $_POST['appointment_date'];
$appointment_time = $_POST['appointment_time'];
$notes = $_POST['notes'];

$sql = "INSERT INTO appointments (patientname, doctor, skincondition, appointment_date, appointment_time, notes)
VALUES ('$patientname', '$doctor', '$skincondition', '$appointment_date', '$appointment_time', '$notes')";

if ($conn->query($sql) === TRUE) {
    echo "<h2>Appointment booked successfully 💜</h2>";
    echo "<p><a href='appointments.html'>Book another appointment</a></p>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>