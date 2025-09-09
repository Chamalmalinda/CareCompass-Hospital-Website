<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctors & Staff - Care Compass Hospitals</title>
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
            min-height: 100vh;
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

        .header {
            background: #07539fb6;
            color: white;
            text-align: center;
            padding: 30px 0;
        }

        .header h2 {
            font-size: 40px;
            font-weight: bold;
            margin: 0;
            font-family: Cambria;
        }

        .container {
            max-width: 100%;
            padding: 20px;
            white-space: nowrap;
        }

        .box-container {
            display: flex;
            gap: 20px;
            padding: 20px;
            overflow-x: auto;
        }

        .box {
            background-color: rgb(231, 244, 249);
            padding: 15px;
            border-radius: 10px;
            text-align: center;
            width: 260px;
            flex-shrink: 0;
            box-shadow: 0px 0px 10px rgba(38, 209, 235, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .box:hover {
            transform: scale(1.05);
            box-shadow: 0px 10px 20px rgba(38, 68, 235, 0.764);
        }

        .box img {
            width: 100%;
            border-radius: 10px;
        }

        .box h2 {
            color: #2196F3;
            margin-top: 10px;
            font-size: 20px;
            font-family: Georgia;
        }

        .box p {
            color: #070707;
            font-weight: bold;
            font-size: 16px;
            font-family: unset;
        }

        
        .login-btn {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px auto;
            padding: 12px 20px;
            background: #0073e6cb;
            color: #ffffff;
            font-size: 20px;
            font-weight: bold;
            border-radius: 12px;
            cursor: pointer;
            text-decoration: none;
            border: none;
            box-shadow: 0px 0px 10px #0073e681;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .login-btn:hover {
            background: #087be6;
            box-shadow: 0px 10px 20px rgba(38, 123, 236, 0.813);
        }

        
        .modal {
            display: none;
            position: fixed;
            z-index: 10;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            width: 320px;
            text-align: center;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.3);
        }

        .modal-content h2 {
            margin-bottom: 20px;
            font-family: Cambria;
        }

        .modal-content input {
            width: 90%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .modal-content button {
            background: #0073e6cb;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .modal-content button:hover {
            background: #087be6;
        }

        .close-btn {
            cursor: pointer;
            float: right;
            font-size: 20px;
            color: #555;
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
                <li><a href="index2.php">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="doctors.php"class="active">Doctors & Staff</a></li>
                <li><a href="appoinments.php">Appointments</a></li>
                <li><a href="contact.php" >Contact</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="aboutus.php">About us</a></li>
                <li><a href="billpayments.php">Bill Payments</a></li>
            </ul>
        </nav>
    </header>
    

    <main>
        <section class="header">
            <p>Meet Our</p>
            <h2>Doctors & Staff</h2>
        </section>

        <div class="container">
            <div class="box-container">
                <div class="box">
                    <img src="images/john.png" alt="Dr. John Smith">
                    <h2>Dr. Oshan Ravinath</h2>
                    <p>Cardiologist</p>
                    <p>MD, FACC<br>Mail: Oshan11carecompass@gmail.com</p>
                </div>
                <div class="box">
                    <img src="images/haritha.png" alt="Dr. John Smith">
                    <h2>Dr. Haritha Abewardane</h2>
                    <p>Cardiologist</p>
                    <p>MD, FACC<br>Mail: haritha10carecompass@gmail.com</p>
                </div>
                <div class="box">
                    <img src="images/emily.png" alt="Dr. Emily Brown">
                    <h2>Dr. Dasuni Vindya</h2>
                    <p>Neurologist</p>
                    <p>MD, PhD<br>Mail: Dasuni62carecompass@gmail.com</p>
                </div>
                <div class="box">
                    <img src="images/hiran.png" alt="Dr. John Smith">
                    <h2>Dr. Hiran Sachintha </h2>
                    <p>Neurologist</p>
                    <p>MD, FACC<br>Mail: hiran31carecompass@gmail.com</p>
                </div>
                <div class="box">
                    <img src="images/james.png" alt="Dr. James Wilson">
                    <h2>Dr. Chirath chamuditha</h2>
                    <p>Dentist</p>
                    <p>DDS, MDS<br>Mail: chirath33carecompass@gmail.com</p>
                </div>
                <div class="box">
                    <img src="images/yasitha.png" alt="Dr. James Wilson">
                    <h2>Dr. Yasitha</h2>
                    <p>Dentist</p>
                    <p>DDS, MDS<br>Mail: yasitha99carecompass@gmail.com</p>
                </div>
                <div class="box">
                    <img src="images/sofia.png" alt="Dr. Sophia Miller">
                    <h2>Dr. Shermi Udari</h2>
                    <p>Pediatrician</p>
                    <p>MD, FAAP<br>Mail: shermi44@carecompass@gmail.com</p>
                </div>
                <div class="box">
                    <img src="images/nurse.png" alt="Nurse Anna Taylor">
                    <h2>Chamodi Bhagya</h2>
                    <p>Senior Nurse</p>
                    <p>RN, BSN<br>Mail: bagya67carecompass@gmail.com</p>
                </div>
                <div class="box">
                    <img src="images/mark.png" alt="Lab Reporter Mark Lee">
                    <h2>Dasun Shanaka</h2>
                    <p>Lab Reporter</p>
                    <p>BSc, Medical Lab Tech<br>Mail: dasun00carecompass@gmail.com</p>
                </div>
            </div>
        </div>
        

      
    <button class="login-btn" onclick="openModal()">Staff/Admin Login</button>

    
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeModal()">&times;</span>
            <h2>Login</h2>
            <input type="text" id="username" placeholder="Username" required>
            <input type="password" id="password" placeholder="Password" required>
            <button onclick="login()">Login</button>
        </div>
    </div>

    <script>
        
        function openModal() {
            document.getElementById("loginModal").style.display = "flex";
        }
    
        
        function closeModal() {
            document.getElementById("loginModal").style.display = "none";
        }
    
        
        function login() {
            let username = document.getElementById("username").value;
            let password = document.getElementById("password").value;
    
            if (username === "admin" && password === "admin123") {
                alert("Admin login successful!");
                closeModal();
                
                window.location.href = "admindashboard.php";
            } else if (username === "staff" && password === "staff123") {
                alert("Staff login successful!");
                closeModal();
                
                window.location.href = "staffdashboard.php";
            } else {
                alert("Invalid credentials! Try again.");
            }
        }
    </script>
      <footer>
        <p>&copy; 2025 Care Compass Hospitals. All rights reserved.</p>
    </footer>
    
    
</body>
</html>
