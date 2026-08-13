<?php
// CIT 240 - Open Source Programming
// Laboratory Activity 1: Open Source Project Information Viewer

$projectName = "Bootstrap";
$developer = "Mark Otto, Jacob Thornton & Bootstrap Core Team";
$language = "HTML, CSS, JavaScript";
$license = "MIT License";
$description = "Bootstrap is a world-renowned, open-source front-end framework for building responsive, mobile-first web applications using HTML, CSS, and JavaScript.";

// Additional project information (Step 8)
$repositoryUrl = "https://github.com/twbs/bootstrap";
$latestVersion = "v5.3.3 (Stable)";
$supportedPlatforms = "All Modern Web Browsers (Chrome, Firefox, Safari, Edge)";
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
            max-width: 650px;
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
        a {
            color: #3498db;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .divider {
            border: 0;
            border-top: 1px solid #eee;
            margin: 15px 0;
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

        <hr class="divider">

        <!-- Additional Project Information (Step 8) -->
        <div class="info-row">
            <span class="label">Repository URL:</span>
            <span><a href="<?php echo $repositoryUrl; ?>" target="_blank"><?php echo $repositoryUrl; ?></a></span>
        </div>

        <div class="info-row">
            <span class="label">Latest Version:</span>
            <span><?php echo $latestVersion; ?></span>
        </div>

        <div class="info-row">
            <span class="label">Supported Platforms:</span>
            <span><?php echo $supportedPlatforms; ?></span>
        </div>

        <div class="footer">
            CIT 240 – Open Source Programming | Laboratory Activity 1
        </div>
    </div>

</body>
</html>
