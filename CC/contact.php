<?php

include('db connection.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $query_topic = $_POST['query_topic'];
    $phone_number = $_POST['phone_number'];
    $message = $_POST['message'];

    
    $stmt = $conn->prepare("INSERT INTO contact_form (full_name, email, query_topic, phone_number, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $full_name, $email, $query_topic, $phone_number, $message);

    
    if ($stmt->execute()) {
        $success_message = "Your message has been sent successfully.";
    } else {
        $error_message = "Error: " . $stmt->error;
    }

   
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Care Compass Hospitals</title>
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

        .contact-header {
            text-align: center;
            padding: 50px 0;
            background: #07539fb6;
            color: white;
        }

        .contact-header h1 {
            font-size: 40px;
        }

        .contact-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            padding: 50px 20px;
            gap: 20px;
        }

        .contact-container p {
            font-family: 'Times New Roman';
        }

        .contact-box {
            background: white;
            width: 300px;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(38, 209, 235, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background-color: rgb(231, 244, 249);
        }

        .contact-box:hover {
            transform: scale(1.05);
            box-shadow: 0px 10px 20px rgba(38, 68, 235, 0.764);
        }

        .contact-box img {
            height: 50px;
            margin-bottom: 15px;
        }

        .contact-box h2 {
            font-size: 22px;
            color: #2196F3;
        }

        .contact-box p {
            font-size: 18px;
        }

        .form-container {
            width: 60%;
            max-width: 800px;
            margin-bottom: 20px;
            margin: 40px auto;
            background: rgba(255, 255, 255, 0);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(255, 255, 255, 0);
            text-align: center;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 26px;
            color: #000000;
            font-family: Cambria;
        }

        .form-group {
            display: flex;
            gap: 20px;
            margin-bottom: 15px;
        }

        .form-group input, 
        .form-group textarea {
            flex: 1;
            padding: 12px;
            border: 1px solid #0000004d;
            border-radius: 5px;
            font-size: 12px;
            background: #f8fbffa8;
        }

        .form-group textarea {
            height: 150px;
            resize: none;
        }

        .submit-btn {
            display: block;
            margin: 20px auto;
            padding: 12px 25px;
            background: #0073e6cb;
            color: #ffffff;
            font-family: 'Times New Roman', Times;
            font-size: 22px;
            font-weight: bold;
            border-radius: 12px;
            cursor: pointer;
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
                <li><a href="appoinments.php">Appoinments</a></li>
                <li><a href="contact.php" class="active">Contact</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="aboutus.php">About us</a></li>
                <li><a href="billpayments.php">Bill Payments</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="contact-header">
            <h1>Contact Us</h1>
            <p>Need assistance? Reach out to us for any inquiries or support.</p>
        </section>

        <section class="contact-container">
            <div class="contact-box">
                <img src="images/contact.png" alt="Call Icon">
                <h2>Call Us</h2>
                <p>📞+94 112 987 526</p>
                <p>+94 342 007 213</p>
                <p>+94 989 745 001</p>
            </div>
            <div class="contact-box">
                <img src="images/mail.png" alt="Email Icon">
                <h2>Email Us</h2>
                <p>carecompass98@gmail.com</p>
            </div>
            <div class="contact-box">
                <img src="images/location.png" alt="Location Icon">
                <h2>Location</h2>
                <p>📍Main street, Hildon place, Colombo 5</p>
            </div>
        </section>

        <section class="form-container">
            <h2>Give us your feedback</h2>
            <?php if (isset($success_message)) { echo "<p>$success_message</p>"; } ?>
            <?php if (isset($error_message)) { echo "<p>$error_message</p>"; } ?>
            <form method="POST">
                <div class="form-group">
                    <input type="text" name="full_name" placeholder="Your Full Name" required>
                    <input type="email" name="email" placeholder="Your Email Address" required>
                </div>
                <div class="form-group">
                    <input type="text" name="query_topic" placeholder="Your Query Topic" required>
                    <input type="tel" name="phone_number" placeholder="Your Phone Number" required>
                </div>
                <div class="form-group">
                    <textarea name="message" placeholder="Your Message" required></textarea>
                </div>
                <button type="submit" class="submit-btn">Send Message</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Care Compass Hospitals. All rights reserved.</p>
    </footer>
</body>
</html>
