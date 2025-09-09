<?php

$conn = new mysqli("localhost", "root", "", "carecompass");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT full_name, email, phone, department, appointment_date, appointment_time FROM appointments ORDER BY appointment_date ASC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Dashboard - Care Compass Hospitals</title>
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
        }

        main {
            flex: 1; 
        }
        
        header {
            background: #f9fcff; 
            color: rgb(0, 0, 0);
            padding: 5px 10px;
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

        .dashboard-header {
            background: #07539fb6;
            color: white;
            text-align: center;
            padding: 50px 0;
        }

        .dashboard-header h1 {
            margin: 0;
            font-size: 40px;
            font-family: Cambria;
        }

        .appointments-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 30px;
        }

        .appointment-box {
            background: white;
            width: 80%;
            margin: 15px 0;
            padding: 20px;
            text-align: center;
            font-family: Verdana;
            border-radius: 10px;
            background-color: rgb(231, 244, 249);
            box-shadow: 0px 0px 10px rgba(38, 209, 235, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .appointment-box:hover {
            transform: scale(1.05);
            box-shadow: 0px 10px 20px rgba(38, 68, 235, 0.764);
        }

        .appointment-box h3 {
            margin: 10px 0;
            color: #2196F3;
            font-size: 25px;
            font-family: Cambria;
        }

        .appointment-box p {
            font-size: 18px;
            color: #000000;
            font-family: 'Times New Roman';
        }

        .logout-btn {
            display: block;
            margin: 30px auto;
            padding: 12px 10px;
            background: #07539fb6;
            font-family: Cambria;
            color: white;
            text-align: center;
            font-size: 20px;
            border-radius: 2px;
            width: 150px;
            cursor: pointer;
            border: none;
            box-shadow: 0px 0px 10px rgb(39, 152, 232);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .logout-btn:hover {
            background: #3108e6;
            color: #ffffff;
            transform: scale(1.05);
            box-shadow: 0px 10px 20px rgba(49, 18, 224, 0.813);
        }

        footer {
            text-align: center;
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
                <li><a href="staffdashboard.php" class="active">Home</a></li>
                <li><a href="reports.php">Upload lab Reports</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <section class="dashboard-header">
            <h1>Staff Dashboard</h1>
        </section>

        <div class="appointments-container">
            <h2>Upcoming Appointments</h2>

            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='appointment-box'>";
                    echo "<h3>Patient: " . htmlspecialchars($row['full_name']) . "</h3>";
                    echo "<p><strong>Email:</strong> " . htmlspecialchars($row['email']) . "</p>";
                    echo "<p><strong>Phone:</strong> " . htmlspecialchars($row['phone']) . "</p>";
                    echo "<p><strong>Department:</strong> " . htmlspecialchars($row['department']) . "</p>";
                    echo "<p><strong>Date:</strong> " . htmlspecialchars($row['appointment_date']) . "</p>";
                    echo "<p><strong>Time:</strong> " . htmlspecialchars($row['appointment_time']) . "</p>";
                    echo "</div>";
                }
            } else {
                echo "<p style='text-align:center; font-size: 18px; color: #333;'>No appointments scheduled.</p>";
            }
            ?>
        </div>

        <button class="logout-btn" onclick="logout()">Logout</button>
    </main>

    <footer>
        <p>&copy; 2025 Care Compass Hospitals. All rights reserved.</p>
    </footer>

    <script>
        function logout() {
            alert("Logging out...");
            window.location.href = "index.php"; 
        }
    </script>

</body>
</html>

<?php

$conn->close();
?>