<?php
include('db connection.php'); 

$success_message = ""; 
$error_message = ""; 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    
    $sql = "SELECT id, full_name, email, phone_number, password FROM users WHERE email = ?";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($user_id, $full_name, $db_email, $db_phone_number, $db_password); // Bind columns to variables
            $stmt->fetch();

            // Verify the password against the hashed password stored in the database
            if (password_verify($password, $db_password)) {
                
                $success_message = "Login successful! Welcome, " . htmlspecialchars($full_name);

                
                session_start();
                $_SESSION['user_id'] = $user_id;
                $_SESSION['user_name'] = $full_name;

                
                header("Location: userinfo.php");
                exit();
            } else {
                $error_message = "Incorrect password. Please try again.";
            }
        } else {
            $error_message = "No account found with that email address.";
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
            display: block;
        }

        .form-container h2 {
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

        .error-message {
            color: red;
        }

        .success-message {
            color: green;
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
                <li><a href="login.php" class="active">Login</a></li>
                <li><a href="userinfo.php">Userinfo</a></li>
                <li><a href="registration.php">Registration</a></li>
                <li><a href="aboutus.php">About us</a></li>
                <li><a href="billpayments.php">Bill Payments</a></li>
            </ul>
        </nav>
    </header>

    <section class="login-header">
        <h1>Log in here</h1>
    </section>

    <main>
        <section class="form-container">
            <h2> Login</h2>
            
            <?php if ($error_message): ?>
                <p class="error-message"><?= $error_message ?></p>
            <?php elseif ($success_message): ?>
                <p class="success-message"><?= $success_message ?></p>
            <?php endif; ?>
            
            <form method="POST" action="login.php">
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email Address" required>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="submit-btn">Login</button>
            </form>
            <a href="registration.php">Don't have an account? Register here</a>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Care Compass Hospitals. All rights reserved.</p>
    </footer>

</body>
</html>
