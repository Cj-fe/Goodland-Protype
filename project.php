<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eco Energy Navigation</title>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="projects.css">
</head>

<body>
    <!-- Top Bar with logo, contact info and consultation button -->
    <?php include 'includes/nav_bar.php'?>

    <div class="hero">
        <h1>OUR PROJECTS</h1>
        <p>Goodland’s initiatives in sustainable development and environmental conservation.</p>
    </div>

    <div class="projects">
        <div class="project-item">
            <div class="project-content">
                <h3>Bantayan Battery Solution</h3>
                <p>Brief text about the battery solution initiative.</p>
                <a href="#" class="btn">Learn More</a>
            </div>
            <img src="img/bantayan.png" alt="Bantayan Battery Solution">

        </div>

        <div class="project-item">
            <img src="esawod.jpg" alt="ESAWOD">
            <div class="project-content">
                <h3>ESAWOD</h3>
                <p>Brief text about the ESAWOD initiative.</p>
                <a href="#" class="btn">Learn More</a>
            </div>
        </div>

        <div class="project-item">
            <div class="project-content">
                <h3>Marine Protected Area - Mambacayao</h3>
                <p>Brief text about marine conservation efforts in Mambacayao.</p>
                <a href="#" class="btn">Learn More</a>
            </div>
            <img src="img/marine.jpg" alt="Marine Protected Area - Mambacayao">

        </div>
        

        <div class="project-item">
            <img src="img/watershed.jpg" alt="Watershed Protected Zone">
            <div class="project-content">
                <h3>Watershed Protected Zone</h3>
                <p>Brief text about watershed conservation initiatives.</p>
                <a href="#" class="btn">Learn More</a>
            </div>
        </div>

        <div class="project-item">
            <div class="project-content">
                <h3>Adlaw Sang Mananagat</h3>
                <p>Brief text about the Adlaw Sang Mananagat event.</p>
                <a href="#" class="btn">Learn More</a>
            </div>
            <img src="img/adlaw.jpg" alt="Adlaw Sang Mananagat">
        </div>

        <div class="project-item">
            <img src="img/radio.png" alt="Radio and Podcast">
            <div class="project-content">
                <h3>Radio and Podcast</h3>
                <p>Brief text about Goodland’s radio and podcast efforts.</p>
                <a href="#" class="btn">Watch Episodes</a>
                <a href="#" class="btn">Learn More</a>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'?>

    
</body>
<script>
    document.addEventListener("DOMContentLoaded", function () {
    const paragraphs = document.querySelectorAll(".projects p");

    function handleScroll() {
        paragraphs.forEach((p) => {
            const rect = p.getBoundingClientRect();
            if (rect.top < window.innerHeight - 50) {
                p.classList.add("show");
            }
        });
    }

    window.addEventListener("scroll", handleScroll);
    handleScroll(); // Run once to check already visible elements
});
document.addEventListener("DOMContentLoaded", function () {
    const images = document.querySelectorAll(".project-item img");

    function handleScroll() {
        images.forEach((img) => {
            const rect = img.getBoundingClientRect();
            if (rect.top < window.innerHeight - 50) {
                img.classList.add("show");
            }
        });
    }

    window.addEventListener("scroll", handleScroll);
    handleScroll(); // Run once to check already visible elements
});

</script>
</html>