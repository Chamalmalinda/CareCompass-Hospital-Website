<?php

include 'db connection.php';


$upload_success_message = '';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $patient_id = $_POST['patient_id']; 
    $patient_name = $_POST['patient_name'];
    $upload_type = $_POST['upload_type'];

    // Validate patient name and patient_id
    if (empty($patient_name) || empty($patient_id)) {
        die("Patient Name and Patient ID cannot be empty.");
    }

   
    $target_dir = "uploads/";

   
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    
    $file_name = basename($_FILES["file_upload"]["name"]);
    $target_file = $target_dir . time() . "_" . $file_name;

    
    $allowed_types = ['pdf', 'jpg', 'png', 'docx'];
    $file_extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

   
    if (!in_array($file_extension, $allowed_types)) {
        die("Invalid file type. Only PDF, JPG, PNG, and DOCX are allowed.");
    }

    
    if (move_uploaded_file($_FILES["file_upload"]["tmp_name"], $target_file)) {
        
        $stmt = $conn->prepare("INSERT INTO patient_reports (patient_id, patient_name, upload_type, file_path) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $patient_id, $patient_name, $upload_type, $target_file);

        
        if ($stmt->execute()) {
            $upload_success_message = "File uploaded successfully!";
        } else {
            $upload_success_message = "Database error: " . $stmt->error;
        }

        
        $stmt->close();
    } else {
        $upload_success_message = "Failed to upload the file.";
    }
}


$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports - Care Compass Hospitals</title>
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

        .upload-form {
            width: 60%;
            max-width: 600px;
            margin: 30px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(38, 209, 235, 0.2);
            text-align: center;
            background-color: rgba(0, 115, 230, 0.05);
        }

        .upload-form h2 {
            font-size: 24px;
            color: #07539f;
            font-family: Cambria;
            margin-bottom: 15px;
        }

        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            font-size: 16px;
            color: #333;
            margin-bottom: 5px;
            font-family: Cambria;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            background: rgb(248, 251, 255);
        }

        .upload-btn {
            display: block;
            width: 100%;
            padding: 12px;
            background: #0073e6;
            color: white;
            font-size: 18px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            box-shadow: 0px 0px 10px rgb(39, 152, 232);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .upload-btn:hover {
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

        .success-message {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .error-message {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
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
            <li><a href="staffdashboard.php">Home</a></li>
            <li><a href="reports.php" class="active">Upload Lab Reports</a></li>
        </ul>
    </nav>
</header>

<main>
    <section class="dashboard-header">
        <h1>Patients Reports Upload</h1>
    </section>

    <section class="upload-form">
        <h2>Upload Patient Report</h2>

        <!-- Display Success Message -->
        <?php if ($upload_success_message): ?>
            <div class="success-message"><?= $upload_success_message ?></div>
        <?php endif; ?>

        <form action="reports.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="patient_id">Patient ID:</label>
                <input type="text" id="patient_id" name="patient_id" placeholder="Enter Patient ID" required>
            </div>

            <div class="form-group">
                <label for="patient_name">Patient Name:</label>
                <input type="text" id="patient_name" name="patient_name" placeholder="Enter Patient Name" required>
            </div>

            <div class="form-group">
                <label for="upload_type">Upload Type:</label>
                <select id="upload_type" name="upload_type" required>
                    <option value="">Select Report Type</option>
                    <option value="Blood Test">Blood Test</option>
                    <option value="X-Ray">X-Ray</option>
                    <option value="MRI Scan">MRI Scan</option>
                    <option value="Prescription">Prescription</option>
                </select>
            </div>

            <div class="form-group">
                <label for="file_upload">Choose File:</label>
                <input type="file" id="file_upload" name="file_upload" required>
            </div>

            <button type="submit" class="upload-btn">Upload Report</button>
        </form>
    </section>
</main>

<footer>
    <p>&copy; 2025 Care Compass Hospitals. All rights reserved.</p>
</footer>

</body>
</html>