<?php

$conn = new mysqli("localhost", "root", "", "carecompass");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $conn->real_escape_string($_POST['full_name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $department = $conn->real_escape_string($_POST['department']);
    $appointment_date = $conn->real_escape_string($_POST['appointment_date']);
    $appointment_time = $conn->real_escape_string($_POST['appointment_time']);

    $sql = "INSERT INTO appointments (full_name, email, phone, department, appointment_date, appointment_time)
            VALUES ('$full_name', '$email', '$phone', '$department', '$appointment_date', '$appointment_time')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Appointment booked successfully!'); window.location.href='http://localhost/CC/appoinments.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment - Care Compass Hospitals</title>
    <style>
        html, body {
            height: 100%;
            display: flex;
            flex-direction: column;
            margin: 0;
            padding: 0;
            background-image: url(images/background2.png);
            background-size: cover;
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        main {
            flex: 1;
        }

        header {
            background: #ffffff;
            color: rgb(0, 0, 0);
            padding: 10px 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            display: flex;
            font-style: oblique;
            font-size: larger;
            align-items: center;
        }

        .logo img {
            height: 70px;
            margin-right: 5px;
        }

        h1 {
            margin: 0;
            font-size: 34px;
            font-family: Cambria;
        }

        nav ul {
            list-style: none;
            padding: 0;
            display: flex;
            margin-left: auto;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: #2196F3;
            text-decoration: none;
            font-weight: normal;
            font-family: Cambria;
            font-size: 20px;
            box-shadow: 2px 2px 15px #ffffff;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        nav ul li a:hover, 
        nav ul li a.active {
            color: #000000;
            transform: scale(1.05);
            text-shadow: 2px 2px 5px #2196F3;
        }

        .appointment-header {
            text-align: center;
            padding: 50px 0;
            background: #07539fb6;
            color: white;
        }

        .appointment-header h1 {
            font-size: 40px;
        }

        .appointment-header p {
            font-family: Cambria;
        }

        .appointment-container {
            width: 60%;
            max-width: 800px;
            margin: 40px auto;
            background: rgba(255, 255, 255, 0);
            padding: 30px;
            font-size: 15px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0);
            text-align: center;
        }

        .appointment-container h2 {
            font-size: 26px;
            color: #000000;
            font-family: Cambria;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            font-size: 19px;
            gap: 15px;
            margin-bottom: 20px;
        }

        .form-group input, 
        .form-group select {
            width: 100%;
            padding: 12px;
            border: 1px solid #00000074;
            border-radius: 5px;
            font-size: 15px;
            font-family: 'Lucida Sans';
            background: #f8fbff63;
        }

        .submit-btn {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 50%;
            margin: 30px auto;
            padding: 12px 25px;
            background: #0073e6cb;
            color: #ffffff;
            font-family: 'Times New Roman', Times;
            font-size: 22px;
            font-weight: bold;
            border-radius: 12px;
            cursor: pointer;
            text-decoration: none;
            box-shadow: 0px 0px 10px #0073e681;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
        }

        .submit-btn:hover {
            background: #087be6;
            color: #ffffff;
            transform: scale(1.05);
            box-shadow: 0px 10px 20px rgba(38, 123, 236, 0.813);
        }

        footer {
            text-align: center;
            font-family: 'Times New Roman';
            padding: 10px;
            background: #07539fb6;
            color: white;
            margin-top: auto;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="images/hospitals.png" alt="Care Compass Hospitals Logo">
            <h1>Care Compass Hospitals</h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="doctors.php">Doctors & Staff</a></li>
                <li><a href="appointments.php" class="active">Appointments</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="aboutus.php">About us</a></li>
                <li><a href="billpayments.php">Bill Payments</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="appointment-header">
            <h1>Book an Appointment</h1>
            <p>Schedule your visit with us today.</p>
        </section>

        <section class="appointment-container">
            <h2>Fill in your details</h2>
            <form id="appointmentForm" method="POST">
                <div class="form-group">
                    <input type="text" name="full_name" placeholder="Full Name" required>
                    <input type="email" name="email" placeholder="Email Address" required>
                </div>
                <div class="form-group">
                    <input type="tel" name="phone" placeholder="Phone Number" required>
                    <select name="department" required>
                        <option value="" disabled selected>Select a Department</option>
                        <option value="General Medicine">General Medicine</option>
                        <option value="Dental">Dental</option>
                        <option value="Pediatrics">Pediatrics</option>
                        <option value="Cardiology">Cardiology</option>
                        <option value="Neurology">Neurology</option>
                        <option value="Dermatology">Dermatology</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="date" name="appointment_date" required>
                    <input type="time" name="appointment_time" required>
                </div>
                <button type="submit" class="submit-btn">Book the Appointment</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Care Compass Hospitals. All rights reserved.</p>
    </footer>
</body>
</html>