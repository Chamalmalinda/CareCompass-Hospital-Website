<?php

include('db connection.php');


$query = "SELECT * FROM contact_form";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback - Care Compass Hospitals</title>
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

        

        .saved-feedback {
            background: white;
            width: 80%;
            margin: 15px 180px;
            padding: 20px;
            text-align: center;
            font-family: Verdana;
            border-radius: 10px;
            background-color: rgb(219, 242, 251);
            box-shadow: 0px 0px 10px rgba(38, 209, 235, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .saved-feedback:hover {
            transform: scale(1.05);
            box-shadow: 0px 10px 20px rgba(90, 194, 236, 0.76);
        }

        .saved-feedback h3 {
            margin: 10px 0;
            color: #2196F3;
            font-size: 25px;
            font-family: Cambria;
        }

        .saved-feedback p {
            font-size: 18px;
            color: #000000;
            font-family: 'Times New Roman';
        }

        .saved-feedback h2 {

        font-family: Cambria;
        font-size: 30px;

        }

        footer {
            text-align: center;
            padding: 10px;
            font-family: 'Times New Roman';
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
                <li><a href="admindashboard.php">Home</a></li>
                <li><a href="billpayments2.php">Bill Payments</a></li>
                <li><a href="feedback.php" class="active">Feedback</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="dashboard-header">
            <h1>Feedback</h1>
        </section>


            
        

        

        
        <div class="saved-feedback">
            <h2>Saved Feedback</h2>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='feedback-entry'>";
                    echo "<p><strong>Patient Name:</strong> " . $row['full_name'] . "</p>";
                    echo "<p><strong>Email:</strong> " . $row['email'] . "</p>";
                    echo "<p><strong>Query Topic:</strong> " . $row['query_topic'] . "</p>";
                    echo "<p><strong>Message:</strong> " . $row['message'] . "</p>";
                    echo "<hr>";
                    echo "</div>";
                }
            } else {
                echo "<p>No feedback available.</p>";
            }
            ?>
        </div>
    </main>

    <footer>
        <p>&copy; 2025 Care Compass Hospitals. All rights reserved.</p>
    </footer>

</body>
</html>
