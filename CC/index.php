<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Care Compass Hospitals</title>
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
            background: #ffffff; 
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
            font-weight:normal;
            font-family: Cambria;
            font-size: 20px;
            box-shadow: 2px 2px 15px #ffffff;
            transition: transform 0.3s ease,box-shadow 0.3s ease;
        }

        nav ul li a:hover,
        nav ul li a.active {
            
            color: #000000;
            transform: scale(1.05);
            text-shadow: 2px 2px 5px #2196F3;
        }
        
        .hero {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            background: url(images/background.png);
            background-size: cover;
            padding: 50px;
            color: white;
        }

        .hero-text {
            flex: 2;
            text-align: left;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        .hero-text h1 {
            font-size: 60px;
            margin-bottom: 20px;
            font-family:fantasy;
        }

        .hero-text p {
            font-size: 20px;
            margin-bottom: 20px;
            margin-top: -10px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background: rgb(100, 183, 225);
            color: #ffffff;
            font-size: 24px;
            font-weight: bold;
            border-radius: 15px;
            cursor: pointer;
            text-decoration: none;
            margin-top: 10px;
            box-shadow: 0px 0px 10px rgb(39, 152, 232);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .btn:hover {
            background: #3108e6;
            color: #ffffff;
            transform: scale(1.05);
            box-shadow: 0px 10px 20px rgba(49, 18, 224, 0.813);
        }

        /* Features Section */
        .features {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }
        
        .feature-box {
            background:white ;
            padding: 10px;
            width: 56%;
            text-align: center;
            color: #07539fb6;
            font-size: 20px; ;
            font-family:Cambria;
            background-color: rgb(231, 244, 249);
            border-radius: 2px;
            box-shadow: 0px 0px 20px rgb(72, 181, 244);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .feature-box p{

            color: black;
            font-size: 20px;
            font-weight: normal;
            font-family: Cochin;
        }

        /* Hover Effect */
        .feature-box:hover {
            transform: scale(1.05);
            box-shadow: 0px 10px 20px rgba(25, 109, 227, 0.813);
        }

        footer {
            text-align: center;
            padding: 10px;
            background: #07539fb6;
            color: white;
            margin-top: auto; 
        }

        .contact {
            padding: 20px;
            text-align: center;
        }

        .contact h2 {
            margin-bottom: 20px;
        }

        .contact p {
            font-size: 18px;
            margin: 10px 0;
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
                <li><a href="index.php"class="active">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="doctors.php">Doctors & Staff</a></li>
                <li><a href="appoinments.php">Appointments</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="aboutus.php">About us</a></li>
                <li><a href="billpayments.php">Bill Payments</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero">
            <div class="hero-text">
                <h1>Welcome to Care Compass Hospitals</h1>
                <p>"At Care Compass Hospitals, we don’t just treat conditions; we care for people, guiding them with expertise and empathy."</p>
                <a href="appoinments.php" class="btn">Book an Appointment</a>
            </div>
        </section>

        <section class="features">
            <div class="feature-box">
                <h2>Our Services</h2>
                <p>Explore our medical treatments, and specialized care.</p>
                <a href="services.php">Learn More</a>
            </div>
            <div class="feature-box">
                <h2>Meet Our Doctors</h2>
                <p>Skilled and certified medical experts dedicated to your care.</p>
                <a href="doctors.php">View Profiles</a>
            </div>
            <div class="feature-box">
                <h2>Patient Portal</h2>
                <p>Access medical records, lab results, and schedule consultations online.</p>
                <a href="login.php">Login Now</a>
            </div>
        </section>

        <section class="contact">
            <h2>Contact Us</h2>
            <p><strong><p>📍 Kandy | Colombo | Kurunegala | 📞 +94 112 987 526</p></strong> 
            <p>Email us at: <strong>carecompass98@gmail.com</strong></p>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Care Compass Hospitals. All rights reserved.</p>
    </footer>
</body>
</html>
