<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Care Compass Hospitals</title>
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
        .services-header {
            background: #07539fb6;
            color: white;
            text-align: center;
            padding: 50px 0;
        }
        

        .services-header h1 {
            margin: 0;
            font-size: 40px;
            font-family: Cambria;
        }
        .services-header br{

            font-size: 15px;
            font-family:inherit;
        }

        .services-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 50px 20px;
            gap: 20px;
        }

        .service-box {
            background: white;
            width: 300px;
            padding: 20px;
            text-align: center;
            font-family: Verdana;
            background-color: rgb(231, 244, 249);
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(38, 209, 235, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .service-box:hover {
            transform: scale(1.05);
            box-shadow: 0px 10px 20px rgba(38, 68, 235, 0.764);
        }

        .service-box img {
            width: 100%;
            height: 180px;
            border-radius: 10px;
        }

        .service-box h3 {
            margin: 15px 0;
            color: #2196F3;
            font-size: 22px;
            font-family: Cambria;
        }

        .service-box p {
            font-size: 16px;
            color: #000000;
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
                <li><a href="index.php">Home</a></li>
                <li><a href="services.php"class="active">Services</a></li>
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
        <section class="services-header">
            <h1>Our Services</h1>
            <br>What we do<br>
        </section>

        <section class="services-container">
            <div class="service-box">
                <img src="images/childcare.png" alt="Child Care">
                <h3>Child Care</h3>
                <p>Complete pediatric healthcare services tailored for all age groups.</p>
            </div>
            <div class="service-box">
                <img src="images/personalcare.png"alt="Personal Care">
                <h3>Personal Care</h3>
                <p>Delivering individualized care and support to every patient.</p>
            </div>
            <div class="service-box">
                <img src="images/ctscan.png" alt="CT Scan">
                <h3>CT Scan</h3>
                <p>Cutting-edge imaging solutions for precise medical diagnostics.</p>
            </div>
            <div class="service-box">
                <img src="images/jointreplacement.png" alt="Joint Replacement">
                <h3>Joint Replacement</h3>
                <p>Superior orthopedic treatments, including joint replacement procedures.</p>
            </div>
            <div class="service-box">
                <img src="images/tests.png" alt="Examination & Diagnosis">
                <h3>Examination & Diagnosis</h3>
                <p>Professional medical assessments and advanced diagnostic evaluations.</p>
            </div>
            <div class="service-box">
                <img src="images/disease.png" alt="Alzheimer's Disease">
                <h3>Alzheimer's Disease</h3>
                <p>Tailored care and specialized treatment strategies for Alzheimer's patients.</p>
            </div>
            <div class="service-box">
                <img src="images/tests.png" alt="Alzheimer's Disease">
                <h3>Laboratary and medical tests</h3>
                <p>Extensive blood testing, covering CBC, cholesterol, and diabetes evaluations.</p>
            </div>
            <div class="service-box">
                <img src="images/counselling2.png" alt="Alzheimer's Disease">
                <h3>Rehabilitation & Wellness Programs</h3>
                <p>Mental health therapy and professional counseling services.</p>
            </div>
            <div class="service-box">
                <img src="images/pharmacy.png" alt="Alzheimer's Disease">
                <h3>Pharmacy & Medication Services</h3>
                <p>24/7 availability of essential medications.</p>
            </div>
            
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Care Compass Hospitals. All rights reserved.</p>
    </footer>
</body>
</html>
