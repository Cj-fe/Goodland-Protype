<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eco Energy Navigation</title>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="includes/footer.css">
    <link rel="stylesheet" href="batery.css">
    <link rel="stylesheet" href="esawod.css">
</head>

<body>
    <!-- Top Bar with logo, contact info and consultation button -->
    <?php include 'includes/nav_bar.php'?>
    
    <section class="hero">
        <div class="hero-content">
            <h1>Welcome to Eco Energy Navigation</h1>
            <p>Innovative solutions for environmental sustainability.</p>
        </div>
    </section>

    <section class="banner">
            
        <div class="banner-content">
            <h1>E-SAWOD: An Arduino-based System for Water Catchment Monitoring</h1>
            <p>Students from MCC Madridejos Community College developed a system that can measure the water level inside the water catchment container/tank. They created a device equipped with Arduino Uno-powered sensors that can measure relative humidity, temperature, and the water level. Their hypothesis? Trees attract rain and ...</p>
        </div>
    </section>

    <section class="hypothesis">
        <h2>Do Trees Attract Rain?</h2>
        <p>Trees play a vital role in the water cycle by releasing moisture into the atmosphere, which can contribute to cloud formation and precipitation. The hypothesis suggests that areas with more trees might experience increased rainfall over time.</p>
    </section>

    <section class="research-progress">
        <img src="researchers-analyzing.jpg" alt="Researchers analyzing data with local stakeholders">
        <p>Moving forward, we aim to expand data collection over a longer period and engage local communities in conservation efforts.</p>
    </section>

    <section class="navigation">
        <button onclick="window.location.href='projects.php'">Back to Projects</button>
    </section>

    <?php include 'includes/footer.php'?>
</body>
</html>