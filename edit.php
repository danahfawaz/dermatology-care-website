<?php
$conn = new mysqli("localhost", "root", "", "dermatology_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM appointments WHERE id=$id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Appointment</title>
    <link rel="stylesheet" href="design.css">
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
    <h2>Edit Appointment</h2>

    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <label for="date">New Date</label>
        <input type="date" id="date" name="appointment_date" value="<?php echo $row['appointment_date']; ?>">

        <button type="submit">Update</button>
    </form>
</main>

<footer>
    <p>Your skin deserves the best care 💜</p>
</footer>

</body>
</html>