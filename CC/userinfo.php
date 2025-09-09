<?php
session_start();
include('db connection.php'); 


if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); 
    exit();
}


$user_id = $_SESSION['user_id'];
$sql = "SELECT full_name, email, phone_number FROM users WHERE id = ?";
if ($stmt = $conn->prepare($sql)) {
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $stmt->bind_result($full_name, $email, $phone_number);
    $stmt->fetch();
    $stmt->close();
} else {
    die("Error: Unable to fetch user data.");
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Info - Care Compass Hospitals</title>
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
        .userinfo-header {
            text-align: center;
            padding: 20px;
            background: #07539fb6;
            color: white;
            width: 100%;
        
        }
        .userinfo-header h1 {
            font-size: 40px;
            
        }
        .details-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            background-color: rgb(231, 244, 249);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .details-container:hover {

            transform: scale(1.05);
            box-shadow: 0px 10px 20px rgba(25, 109, 227, 0.813);
        }

        .details-container h3 {
            margin-bottom: 10px;
            font-family:Georgia;
            font-size: 30px;
            color:  #07539fb6;
            font-weight: strong;

        }
        .details-container p {
            font-size: 20px;
            margin: 5px 0;
            font-family: 'Times New Roman', Times, serif;
        }

        .details-container h4 {
            font-size: 25px;
            font-weight: normal;
            font-family: 'Times New Roman';
            color: #2196F3;
            

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
                <li><a href="index2.php">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="doctors.php">Doctors & Staff</a></li>
                <li><a href="appoinments.php">Appointments</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="userinfo.php" class="active">User Info</a></li>
                <li><a href="aboutus.php">About us</a></li>
                <li><a href="billpayments.php">Bill Payments</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="userinfo-header">
            <h1>User Info</h1>
        </section>
        <div class="details-container">
        <h3>Welcome, <?php echo htmlspecialchars($full_name); ?>!🏥🤝🩺</h3>
            <h4>Personal Information</h4>
            <p><strong>Full Name:</strong> <?php echo htmlspecialchars($full_name); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
            <p><strong>Phone Number:</strong> <?php echo htmlspecialchars($phone_number); ?></p>

            <h4>Medical Documents</h4>
            <p>No documents uploaded yet.</p>
        </div>
    </main>
    
    <footer>
        <p>&copy; 2024 Care Compass Hospitals. All Rights Reserved.</p>
    </footer>
</body>
</html>
