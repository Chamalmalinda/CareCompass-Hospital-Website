<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Care Compass Hospitals</title>
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

        
        .dashboard-content {
            display: flex;
            justify-content: space-between; 
            flex-wrap: wrap;
            margin-top: 30px;
            gap: 20px; 
        }

        .dashboard-box {
            background: white;
            width: 250px;
            padding: 20px;
            margin-left: 20px;
            margin-right: 20px;
            font-weight: normal;
            text-align: center;
            font-family: Verdana;
            border-radius: 10px;
            background-color: rgb(231, 244, 249);
            box-shadow: 0px 0px 10px rgba(38, 209, 235, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .dashboard-box:hover {
            transform: scale(1.05);
            box-shadow: 0px 10px 20px rgba(38, 68, 235, 0.764);
        }

        .dashboard-box h3 {
            margin: 15px 0;
            color: #2196F3;
            font-size: 22px;
            font-family: Cambria;
        }

        .dashboard-box p {
            font-size: 16px;
            color: #000000;
        }

        
        .activity-table {
            width: 100%;
            border-collapse:collapse;
            margin-top: 20px;
        }

        .activity-table th, .activity-table td {
            border: 1px solid #000000;
            padding: 8px;
            text-align: left;
        }

        .activity-table th {
            background-color:#07539fb6;
            font-size: 22px;
            color: white;
        }

        .activity-table td{
            
            font-size: 22px;

        }

        

        .logout-btn {
            display: block;
            margin: 30px auto;
            padding: 12px 10px;
            background: #07539fb6;
            font-family: Cambria;
            color: white;
            text-align: center;
            font-size: 20px;
            border-radius: 2px;
            width: 150px;
            cursor: pointer;
            border: none;
            box-shadow: 0px 0px 10px rgb(39, 152, 232);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        
        }

        .logout-btn:hover {
            background: #3108e6;
            color: #ffffff;
            transform: scale(1.05);
            box-shadow: 0px 10px 20px rgba(49, 18, 224, 0.813);
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
                <li><a href="admindashboard.php" class="active">Home</a></li>
                <li><a href="billpayments2.php">Bill Payments</a></li>
                <li><a href="feedback.php">Feedback</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="dashboard-header">
            <h1>Admin Dashboard</h1>
        </section>

        <!-- Admin Dashboard Content -->
        <div class="dashboard-content">
            <div class="dashboard-box">
                <h3>Doctors Active</h3>
                <p>10 Doctors Active</p>
            </div>

            <div class="dashboard-box">
                <h3>Patients Registered</h3>
                <p>285 Patients Registered</p>
            </div>

            <div class="dashboard-box">
                <h3>Appointments</h3>
                <p>42 Appointments Today</p>
            </div>

            <div class="dashboard-box">
                <h3>Revenue</h3>
                <p>893$</p>
            </div>
        </div>

        <!-- Recent Activity Table -->
        <h3>Recent Activities</h3>
        <table class="activity-table">
            <thead>
                <tr>
                    <th>Activity</th>
                    <th>Date</th>
                    <th>Details</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>New Doctor Added</td>
                    <td>2025-02-22</td>
                    <td>Dr. John Doe joined the hospital, specializing in Cardiology.</td>
                </tr>
                <tr>
                    <td>Patient Registered</td>
                    <td>2025-02-21</td>
                    <td>Patient Jane Smith has been registered for follow-up treatment.</td>
                </tr>
                <tr>
                    <td>Appointment Scheduled</td>
                    <td>2025-02-20</td>
                    <td>Appointment scheduled for Robert Brown for a blood test.</td>
                </tr>
            </tbody>
        </table>

        <button class="logout-btn" onclick="logout()">Logout</button>
    </main>

    <footer>
        <p>&copy; 2025 Care Compass Hospitals. All rights reserved.</p>
    </footer>

    <script>
        function logout() {
            alert("Logging out...");
            window.location.href = "index.php"; 
        }
    </script>

</body>
</html>
