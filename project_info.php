<?php
// CIT 240 - Open Source Programming
// Laboratory Activity 1: Open Source Project Information Viewer

$projectName = "Python Programming Language";
$developer = "Guido van Rossum & Python Software Foundation (PSF)";
$language = "C, Python";
$license = "Python Software Foundation License (PSFL)";
$description = "Python is an open-source, high-level, interpreted programming language emphasizing code readability, simplicity, and extensibility across web development, data science, and automation.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CIT 240 - Open Source Project Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            color: #333;
            margin: 0;
            padding: 40px;
            display: flex;
            justify-content: center;
        }
        .card {
            background: #ffffff;
            border-radius: 8px;
            padding: 30px;
            max-width: 600px;
            width: 100%;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #2c3e50;
            font-size: 22px;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
            margin-top: 0;
        }
        .info-row {
            margin-bottom: 12px;
            line-height: 1.6;
        }
        .label {
            font-weight: bold;
            color: #2c3e50;
            width: 180px;
            display: inline-block;
        }
        .footer {
            margin-top: 25px;
            font-size: 12px;
            color: #7f8c8d;
            border-top: 1px solid #eee;
            padding-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="card">
        <h1>CIT 240 - Open Source Project Information</h1>
        
        <div class="info-row">
            <span class="label">Project Name:</span>
            <span><?php echo $projectName; ?></span>
        </div>
        
        <div class="info-row">
            <span class="label">Developer / Author:</span>
            <span><?php echo $developer; ?></span>
        </div>

        <div class="info-row">
            <span class="label">Programming Language:</span>
            <span><?php echo $language; ?></span>
        </div>

        <div class="info-row">
            <span class="label">Open-Source License:</span>
            <span><?php echo $license; ?></span>
        </div>

        <div class="info-row">
            <span class="label">Project Description:</span>
            <span><?php echo $description; ?></span>
        </div>

        <div class="footer">
            CIT 240 – Open Source Programming | Laboratory Activity 1
        </div>
    </div>

</body>
</html>
