<?php

$servername = "localhost";  
$username = "root";  
$password = "";  
$dbname = "carecompass";  


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$success_message = '';
$error_message = '';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $patient_name = $_POST['patient_name'];
    $invoice_number = $_POST['invoice_number'];
    $amount = $_POST['amount'];
    $payment_method = $_POST['payment_method'];

    
    $sql = "INSERT INTO billpayments (patient_name, invoice_number, amount, payment_method) 
            VALUES (?, ?, ?, ?)";

    
    $stmt = $conn->prepare($sql);

    
    $stmt->bind_param("ssis", $patient_name, $invoice_number, $amount, $payment_method); 

    
    if ($stmt->execute()) {
        $success_message = "Payment successfully recorded.";
    } else {
        $error_message = "Error: " . $stmt->error;
    }

    
    $stmt->close();
}


$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill Payments - Care Compass Hospitals</title>
    <style>
        html, body {
            height: 100%;
            display: flex;
            flex-direction: column;
            margin: 0;
            padding: 0;
            background-image: url(images/background2.png);
            background-size: cover;
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
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        nav ul li a:hover, 
        nav ul li a.active {
            color: #000000;
            transform: scale(1.05);
            text-shadow: 2px 2px 5px #2196F3;
        }

        .payment-header {
            text-align: center;
            padding: 50px 0;
            background: #07539fb6;
            color: white;
        }
        .payment-header p{
            font-family: 'Times New Roman';
        }

        .payment-container {
            width: 60%;
            max-width: 800px;
            margin: 40px auto;
            background: rgba(255, 255, 255, 0);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0);
            text-align: center;
        }

        .payment-container h2 {
            font-size: 26px;
            color: #000000;
            font-family: Cambria;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-bottom: 20px;
        }

        .form-group input, 
        .form-group select {
            width: 100%;
            padding: 12px;
            border: 1px solid #00000074;
            border-radius: 5px;
            font-size: 14px;
            background: #f8fbff49;
        }

        .submit-btn {
            width: 50%;
            margin: 30px auto;
            padding: 12px 25px;
            background: #0073e6cb;
            color: #ffffff;
            font-size: 22px;
            font-weight: bold;
            border-radius: 12px;
            cursor: pointer;
            text-decoration: none;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
        }

        .submit-btn:hover {
            background: #087be6;
            transform: scale(1.05);
            box-shadow: 0px 10px 20px rgba(38, 123, 236, 0.813);
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
                <li><a href="index.php">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="doctors.php">Doctors & Staff</a></li>
                <li><a href="appoinments.php">Appointments</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="aboutus.php">About us</a></li>
                <li><a href="billpayments.php" class="active">Bill Payments</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="payment-header">
            <h1>Bill Payments</h1>
            <p>Securely pay your hospital bills online.</p>
        </section>

        <section class="payment-container">
            <h2>Enter Payment Details</h2>

            <?php
            
            if (!empty($success_message)) {
                echo "<p style='color: black;'>$success_message</p>";
            }
            if (!empty($error_message)) {
                echo "<p style='color: red;'>$error_message</p>";
            }
            ?>

            <form id="paymentForm" action="" method="POST">
                <div class="form-group">
                    <input type="text" name="patient_name" placeholder="Patient Name" required>
                    <input type="text" name="invoice_number" placeholder="Invoice Number" required>
                </div>
                <div class="form-group">
                    <input type="number" name="amount" placeholder="Amount (LKR)" required>
                    <select name="payment_method" required>
                        <option value="" disabled selected>Select Payment Method</option>
                        <option value="Credit Card">Credit Card</option>
                        <option value="Debit Card">Debit Card</option>
                        <option value="Bank Transfer">Bank Transfer</option>
                        <option value="Mobile Payment">Mobile Payment</option>
                    </select>
                </div>
                <button type="submit" class="submit-btn">Pay Now</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Care Compass Hospitals. All rights reserved.</p>
    </footer>
</body>
</html>
