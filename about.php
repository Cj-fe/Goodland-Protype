<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - GoodLand</title>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="header-title.css">
    <link rel="stylesheet" href="includes/footer.css">
    <style>

        .about-section {
            padding: 80px 10%;
            display: flex;
            align-items: center;
            gap: 60px;
        }

        .about-content {
            flex: 1;
        }

        .about-content h2 {
            color: #4CAF50;
            font-size: 36px;
            margin-bottom: 20px;
        }

        .about-content p {
            line-height: 1.8;
            margin-bottom: 20px;
            color: #666;
        }

        .about-image {
            flex: 1;
        }

        .about-image img {
            width: 100%;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .mission-section {
            background-color: #f9f9f9;
            padding: 80px 10%;
        }

        .mission-content {
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
        }

        .mission-content h2 {
            color: #4CAF50;
            font-size: 36px;
            margin-bottom: 40px;
        }

        .mission-box {
            background-color: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            margin-bottom: 40px;
        }

        .mission-box h3 {
            color: #FF8C00;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .mission-box p {
            line-height: 1.8;
            color: #666;
        }

        .certifications {
            padding: 80px 10%;
            text-align: center;
        }

        .certifications h2 {
            color: #4CAF50;
            font-size: 36px;
            margin-bottom: 40px;
        }

        .cert-container {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }

        .cert-item {
            width: 200px;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .cert-item img {
            width: 100px;
            height: auto;
            margin-bottom: 15px;
        }

        .cert-item h4 {
            font-size: 18px;
            margin-bottom: 10px;
            color: #333;
        }

        .cert-item p {
            font-size: 14px;
            color: #666;
        }

        .impact-section {
            background-color: #4CAF50;
            padding: 80px 10%;
            color: white;
            text-align: center;
        }

        .impact-section h2 {
            font-size: 36px;
            margin-bottom: 40px;
        }

        .stats-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 30px;
        }

        .stat-item {
            flex: 1;
            min-width: 200px;
        }

        .stat-number {
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .stat-label {
            font-size: 18px;
        }

        .read-more-btn {
            display: inline-block;
            background-color: white;
            color: #4CAF50;
            padding: 12px 30px;
            margin-top: 40px;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .read-more-btn:hover {
            background-color: #f0f0f0;
        }

        .partners-section {
            padding: 80px 10%;
            text-align: center;
        }

        .partners-section h2 {
            color: #4CAF50;
            font-size: 36px;
            margin-bottom: 40px;
        }

        .partners-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 30px;
        }

        .partner-item {
            width: 220px;
            padding: 30px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s;
        }

        .partner-item:hover {
            transform: translateY(-10px);
        }

        .partner-item img {
            width: 120px;
            height: auto;
            margin-bottom: 20px;
        }

        .partner-item h4 {
            font-size: 18px;
            margin-bottom: 10px;
            color: #333;
        }

        .partner-item p {
            font-size: 14px;
            color: #666;
        }

        .gallery-section {
            padding: 80px 10%;
            background-color: #f9f9f9;
        }

        .gallery-section h2 {
            color: #4CAF50;
            font-size: 36px;
            text-align: center;
            margin-bottom: 40px;
        }

        .gallery-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }

        .gallery-item {
            height: 200px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .team-section {
            padding: 80px 10%;
        }

        .team-section h2 {
            color: #4CAF50;
            font-size: 36px;
            text-align: center;
            margin-bottom: 20px;
        }

        .team-intro {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 60px;
            color: #666;
            line-height: 1.6;
        }

        .team-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 30px;
        }

        .team-member {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s;
        }

        .team-member:hover {
            transform: translateY(-10px);
        }

        .member-image {
            height: 250px;
            overflow: hidden;
        }

        .member-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .member-info {
            padding: 20px;
        }

        .member-info h4 {
            font-size: 22px;
            margin-bottom: 5px;
            color: #4CAF50;
        }

        .member-role {
            font-size: 14px;
            color: #FF8C00;
            margin-bottom: 15px;
        }

        .member-bio {
            font-size: 14px;
            color: #666;
            line-height: 1.6;
        }

    </style>
</head>

<body>
   
<?php include "includes/nav_bar.php";?>

<!-- Updated HTML for the page title section -->
<div class="page-title">
    <div class="leaf-decoration leaf-1"></div>
    <div class="leaf-decoration leaf-2"></div>
    <div class="leaf-decoration leaf-3"></div>
    
    <div class="container">
        <h1>Get to Know GoodLand</h1>
        <p>Home / About Us</p>
    </div>
</div>

    <!-- About Section -->
    <section class="about-section">
        <div class="about-content">
            <h2>What We Do</h2>
       <p>
        GOODLand is a platform under Martha Atienza’s Art Lab that develops and applies a creative and collaborative methodology utilized to tackle social, economic and environmental issues on Bantayan Island in the Visayas, Philippines. As a platform, it does this by organizing with communities and collaborating with individuals, collectives, and/or institutions in various fields of expertise. Centered around art projects, it is the main driver throughout GOODLand’s methodological approach to community-based projects (see our Place, People, and Art-based Model). 
       </p>  </div>
        <div class="about-image">
            <img src="img/peopleplace.png" alt="GoodLand Initiatives">
        </div>
    </section>

    <!-- Mission Statement Section -->
    <section class="mission-section">
        <div class="mission-content">
            <h2>Our Mission & Vision</h2>
            
            <div class="mission-box">
                <h3>Intersection of Art & Resiliency</h3>
                <p>At GoodLand, we leverage art as a powerful tool to create meaningful community dialogues. These dialogues lead to tangible solutions that address the unique challenges faced by Bantayan Island. Through creative expression and collaboration, we build bridges between different stakeholders and develop innovative approaches to resilience.</p>
            </div>
            
            <div class="mission-box">
                <h3>Vision Statement</h3>
                <p>Empowering Bantayan Islanders to enjoy a quality life in an ecologically balanced environment where communities thrive in harmony with nature.</p>
            </div>
            
            <div class="mission-box">
                <h3>Mission Statement</h3>
                <p>Using art and collaboration to address social, economic, and environmental issues facing Bantayan Island through sustainable, community-driven solutions that respect local culture and traditions.</p>
            </div>
        </div>
    </section>

    <!-- Partnership Section -->
    <section class="partners-section">
        <h2>Our Partners</h2>
        <div class="partners-container">
            <div class="partner-item">
                <i class="fa-solid fa-building" style="font-size: 60px; color: #4CAF50; margin-bottom: 15px;"></i>
                <h4>Local Government</h4>
                <p>Supporting community initiatives and providing resources</p>
            </div>
            <div class="partner-item">
                <i class="fa-solid fa-graduation-cap" style="font-size: 60px; color: #4CAF50; margin-bottom: 15px;"></i>
                <h4>Educational Institutions</h4>
                <p>Research collaboration and youth engagement</p>
            </div>
            <div class="partner-item">
                <i class="fa-solid fa-globe" style="font-size: 60px; color: #4CAF50; margin-bottom: 15px;"></i>
                <h4>Environmental NGOs</h4>
                <p>Joint conservation efforts and awareness campaigns</p>
            </div>
            <div class="partner-item">
                <i class="fa-solid fa-users" style="font-size: 60px; color: #4CAF50; margin-bottom: 15px;"></i>
                <h4>Community Groups</h4>
                <p>Grassroots collaboration and local knowledge</p>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery-section">
        <h2>Collage & Memories</h2>
        <div class="gallery-container">
            <div class="gallery-item">
                <img src="img/59047739.png" alt="Community Event">
            </div>
            <div class="gallery-item">
                <img src="img/59047739.png" alt="Art Workshop">
            </div>
            <div class="gallery-item">
                <img src="img/59047739.png" alt="Environmental Project">
            </div>
            <div class="gallery-item">
                <img src="img/59047739.png" alt="Team Meeting">
            </div>
            <div class="gallery-item">
                <img src="img/59047739.png" alt="Beach Cleanup">
            </div>
            <div class="gallery-item">
                <img src="img/59047739.png" alt="Community Gathering">
            </div>
            <div class="gallery-item">
                <img src="img/59047739.png" alt="Art Exhibition">
            </div>
            <div class="gallery-item">
                <img src="img/59047739.png" alt="Youth Program">
            </div>
        </div>
    </section>

    <!-- Team Members Section -->
    <section class="team-section">
        <h2>Meet Our Team</h2>
        <p class="team-intro">GoodLand is powered by a diverse team of passionate individuals dedicated to creating positive change through art and community engagement.</p>
        
        <div class="team-container">
            <div class="team-member">
                <div class="member-image">
                    <img src="/api/placeholder/300/300" alt="Martha Atienza">
                </div>
                <div class="member-info">
                    <h4>Martha Atienza</h4>
                    <div class="member-role">Visual Artist</div>
                    <p class="member-bio">Visual artist focused on environmental and social issues, using art as a medium for change and community engagement.</p>
                </div>
            </div>
            
            <div class="team-member">
                <div class="member-image">
                    <img src="/api/placeholder/300/300" alt="Jake Atienza">
                </div>
                <div class="member-info">
                    <h4>Jake Atienza</h4>
                    <div class="member-role">Interdisciplinary Researcher</div>
                    <p class="member-bio">Interdisciplinary researcher and artist exploring the intersection of community development and creative expression.</p>
                </div>
            </div>
            
            <div class="team-member">
                <div class="member-image">
                    <img src="/api/placeholder/300/300" alt="Bihiya Warriors">
                </div>
                <div class="member-info">
                    <h4>Bihiya Warriors</h4>
                    <div class="member-role">Youth-led Community Group</div>
                    <p class="member-bio">A youth-led community group dedicated to environmental conservation and cultural preservation on Bantayan Island.</p>
                </div>
            </div>
            
            
            <div class="team-member">
                <div class="member-image">
                    <img src="/api/placeholder/300/300" alt="Ramon Alontaga">
                </div>
                <div class="member-info">
                    <h4>Ramon Alontaga</h4>
                    <div class="member-role">Artist</div>
                    <p class="member-bio">Artist working on mechanical and DIY island tech solutions that address local challenges in sustainable ways.</p>
                </div>
            </div>
            
            <div class="team-member">
                <div class="member-image">
                    <img src="/api/placeholder/300/300" alt="DAKOgamay">
                </div>
                <div class="member-info">
                    <h4>DAKOgamay</h4>
                    <div class="member-role">Experimental Platform</div>
                    <p class="member-bio">An experimental platform by Martha & Jake Atienza that explores innovative approaches to community development.</p>
                </div>
            </div>
        </div>
    </section>

<?php include "includes/footer.php"; ?>
</body>

</html>