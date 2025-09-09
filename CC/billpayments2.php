<?php

$servername = "localhost";  
$username = "root";  
$password = "";  
$dbname = "carecompass";  


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM billpayments ORDER BY created_at DESC";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Payments - Care Compass Hospitals</title>
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
            font-family: Cambria;
            font-size: 20px;
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

        .payment-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: white;
            box-shadow: 0px 0px 10px rgba(38, 209, 235, 0.1);
        }

        .payment-table th, .payment-table td {
            border: 1px solid #000000;
            padding: 8px;
            text-align: left;
        }

        .payment-table th {
            background-color: #07539fb6;
            color: white;
            font-size: 22px;
        }

        .payment-table td {

            font-size: 22px;

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
                <li><a href="billpayments2.php" class="active">Bill Payments</a></li>
                <li><a href="feedback.php">Feedback</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="dashboard-header">
            <h1>Patient Payments</h1>
        </section>

        <h3>View Recent Payments</h3>
        <table class="payment-table">
            <thead>
                <tr>
                    <th>Patient Name</th>
                    <th>Invoice Number</th>
                    <th>Amount</th>
                    <th>Payment Method</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>" . htmlspecialchars($row['patient_name']) . "</td>
                            <td>" . htmlspecialchars($row['invoice_number']) . "</td>
                            <td>" . htmlspecialchars($row['amount']) . "</td>
                            <td>" . htmlspecialchars($row['payment_method']) . "</td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No payments found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </main>

    <footer>
        <p>&copy; 2025 Care Compass Hospitals. All rights reserved.</p>
    </footer>

</body>
</html>

<?php

$conn->close();
?>
