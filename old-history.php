<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dermatology_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM appointments";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dermatology Care - Appointment History</title>
    <link rel="stylesheet" href="design.css">

    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
</head>
<body>

<header>
    <h1>Dermatology Care</h1>
    <nav>
        <a href="index.html">Home</a>
        <a href="login-signup.html">Register/Login</a>
        <a href="doctors.html">Doctors</a>
        <a href="appointments.html">Book Appointment</a>
        <a href="old-history.php">Appointment History</a>
    </nav>
</header>

<main class="container">
    <h2>Appointment History</h2>
    <p>Here are the appointments stored in the database.</p>

    <table border="1" width="100%">
        <tr>
            <th>Patient Name</th>
            <th>Doctor</th>
            <th>Condition</th>
            <th>Date</th>
            <th>Time</th>
            <th>Notes</th>
            <th>Action</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row['patientname']."</td>
                        <td>".$row['doctor']."</td>
                        <td>".$row['skincondition']."</td>
                        <td>".$row['appointment_date']."</td>
                        <td>".$row['appointment_time']."</td>
                        <td>".$row['notes']."</td>
                        <td>
                            <a href='edit.php?id=".$row['id']."'>Edit</a> |
                            <a href='delete.php?id=".$row['id']."'>Delete</a>
                        </td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No appointments found</td></tr>";
        }
        ?>
    </table>
</main>

<footer>
    <p>Your skin deserves the best care 💜</p>
</footer>

</body>
</html>

<?php
$conn->close();
?>