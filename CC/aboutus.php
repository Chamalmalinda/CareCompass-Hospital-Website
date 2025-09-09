<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Care Compass Hospitals</title>
    <link rel="stylesheet" href="styles.css">
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
        .about-header {
            color: white;
            text-align: center;
            padding: 80px 20px;
            background: #07539fb6; 
            font-size: 70px;
            font-weight: bold;
            position: relative;
        }
        .about-header h1{

            font-size: 40px;
            font-family: Cambria;
        }
        

        .about-container {
            max-width: 1000px;
            margin: 50px auto;
            padding: 20px;
            
            font-family: Verdana, sans-serif;
        }
        .about-container h2{

            font-size: 100px;
            font-family:fantasy;
            color: #07539f;
            text-align: left;
           

        }

        .about-container p {
            font-size: 22px;
            line-height: 1.6;
            color: #070707;
            font-family: Georgia;
            font-weight: lighter;
        }

        .about-section {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            padding: 40px 20px;
            background-color: rgb(231, 244, 249);
            
        }

        .about-box {
            background:  white;
            width: 250px;
            padding: 20px;
            text-align: center;
            font-family: Verdana;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(38, 209, 235, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background-color: rgb(231, 244, 249);

        }

        .about-box:hover {
            transform: scale(1.05);
            box-shadow: 0px 10px 20px rgba(38, 68, 235, 0.764);
        }

        .about-box img {
            width: 100%;
            height: 150px;
            border-radius: 10px;
        }

        .about-box h3 {
            margin: 15px 0;
            font-size: 24px;
            font-weight: bold;
            font-family: Cambria;
            color: #2196F3;
            
        }
        .about-box p{

            font-weight: normal;
        }

        .achievements-section {
            text-align: center;
            padding: 50px 20px;
            background-color: rgb(231, 244, 249);
            margin-top: 0px;
        }

        .achievements-section h2 {
            font-size: 50px;
            font-family: Cambria;
            color: #07539f;
        }

        .achievements-logos {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 20px;
        }

        .achievements-logos img {
            width: 150px;
            height: auto;
            box-shadow: 0px 0px 10px rgba(38, 209, 235, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;

        }
        .achievements-logos img:hover{

            transform: scale(1.05);
            padding: 2px;
            box-shadow: 0px 10px 20px rgba(38, 68, 235, 0.764);
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
                <li><a href="aboutus.php" class="active">About Us</a></li>
                <li><a href="billpayments.php">Bill Payments</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="about-header">
            <h1>About Us</h1>
        </section>

        <section class="about-container">
            <h2>Personal care for your healthy living<h2>

            <p>Care Compass Hospitals is a leading healthcare institution dedicated to providing world-class medical services with compassion and innovation.
                 With a team of highly skilled professionals and state-of-the-art technology, we offer comprehensive healthcare solutions, from routine check-ups to 
                 advanced medical treatments. Our mission is to enhance the well-being of our patients through personalized care, cutting-edge research, and a commitment to 
                 excellence. At Care Compass Hospitals, your health is our priority.</p>
        </section>

        <section class="about-section">
            <div class="about-box">
                <img src="images/childcare.png" alt="Child Care">
                <h3>Healthcare for Kids</h3>
                <p>Comprehensive pediatric care for children of all ages.</p>
            </div>
            <div class="about-box">
                <img src="images/counseling.png" alt="Medical Counseling">
                <h3>Medical Counseling</h3>
                <p>Expert medical guidance for personalized treatments.</p>
            </div>
            <div class="about-box">
                <img src="images/modern.png" alt="Modern Equipment">
                <h3>Modern Equipment</h3>
                <p>Advanced technology ensuring precise diagnostics.</p>
            </div>
            <div class="about-box">
                <img src="images/qualified.png" alt="Qualified Doctors">
                <h3>Qualified Doctors</h3>
                <p>Highly trained specialists in various medical fields.</p>
            </div>
        </section>

        <section class="achievements-section">
            <h2>Our Hospitals' Achievements</h2>
            <div class="achievements-logos">
                <img src="images/top.png" alt="Award 1">
                <img src="images/top2.png" alt="Award 2">
                <img src="images/top3.png" alt="Award 3">
                <img src="images/top4.png" alt="Award 4">
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Care Compass Hospitals. All rights reserved.</p>
    </footer>
</body>
</html>