<?php
include('db connection.php'); 

$success_message = ""; 
$error_message = ""; 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = trim($_POST['full_name']);
    $email = trim($_POST['email']);
    $phone_number = trim($_POST['phone_number']);
    $password = $_POST['password'];
    
    
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    
    $sql = "INSERT INTO users (full_name, email, phone_number, password) VALUES (?, ?, ?, ?)";
    
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ssss", $full_name, $email, $phone_number, $hashed_password);
        
        
        if ($stmt->execute()) {
            $success_message = "Registration successful!";
            
        } else {
            $error_message = "Error: " . $stmt->error;
        }
        
        
        $stmt->close();
    } else {
        $error_message = "Error: Unable to prepare statement.";
    }

    
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Care Compass Hospitals</title>
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
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
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

        .login-header {
            text-align: center;
            padding: 20px;
            background: #07539fb6;
            color: white;
            width: 100%;
        }

        .form-container {
            width: 50%;
            max-width: 430px;
            background: rgba(255, 255, 255, 0);
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.186);
            text-align: center;
            display: none;
        }

        .form-container{
            display:block;
        }
        .form-container h2{

            font-family: Cambria;
            font-size: 30px;
            color: #0073e6;
        }

        .form-group input, 
        .form-group select {
            width: 100%;
            padding: 12px;
            border: 1px solid #00000042;
            border-radius: 5px;
            font-size: 16px;
            background-color: #e8ecf03a;
            margin-bottom: 5px;
        }

        .submit-btn {
            display: block;
            width: auto;
            padding: 12px 20px;
            background: #0073e6cb;
            padding: 10px;
            color: #ffffff;
            font-size: 20px;
            font-weight: bold;
            border-radius: 7px;
            margin: 0 auto;
            cursor: pointer;
            border: none;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .submit-btn:hover {
            background: #087be6;
            transform: scale(1.05);
            box-shadow: 0px 10px 20px rgba(38, 123, 236, 0.813);
        }

        .toggle-link {
            margin-top: 15px;
            font-size: 16px;
            cursor: pointer;
            color: #0073e6;
            font-weight: bold;
            text-decoration: none;
        }

        .toggle-link:hover {
            text-decoration: underline;
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
                <li><a href="appoinments.php">Appointments</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="registration.php" class="active">Registration</a></li>
                <li><a href="aboutus.php">About us</a></li>
                <li><a href="billpayments.php">Bill Payments</a></li>
            </ul>
        </nav>
    </header>

    <section class="login-header">
        <h1>Register here</h1>
    </section>

    <main>

        <section class="form-container">
            <h2>Registration</h2>
             <form method="POST" action="registration.php">
                <div class="form-group">
                    <input type="text" name="full_name" placeholder="Full Name" required>
                    <input type="email" name="email" placeholder="Email Address" required>
                    <input type="tel" name="phone_number" placeholder="Phone Number" required>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit" name="register" class="submit-btn">Register</button>
            </form>
            <a href="login.php">Already have an account? Login here</a>
        </section>
    </main>
             

    <footer>
        <p>&copy; 2025 Care Compass Hospitals. All rights reserved.</p>
    </footer>

    
</body>
</html>
