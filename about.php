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
 
    <script src="https://cdn.tailwindcss.com"></script>
   <!-- Include AOS Library (in <head>) -->

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

<!-- What We Do Section -->
<section class="bg-white py-16 px-6 md:px-12 lg:px-24">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center gap-12">
        <div class="md:w-1/2" data-aos="fade-right">
            <h2 class="text-3xl md:text-4xl font-bold text-[#0097b2] mb-4">What We Do</h2>
            <p class="text-base md:text-lg text-gray-700 leading-relaxed">
                GOODLand is a platform under Martha Atienza’s Art Lab that develops and applies a creative and collaborative methodology utilized to tackle social, economic, and environmental issues on Bantayan Island in the Visayas, Philippines.
            </p>
        </div>
        <div class="md:w-1/2" data-aos="fade-left">
            <img src="img/peopleplace.png" alt="GoodLand Initiatives" class="w-full rounded-xl shadow-xl">
        </div>
    </div>
</section>

<!-- Mission & Vision Section -->
<section class="bg-gray-50 py-16 px-6 md:px-12 lg:px-24">
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-[#0097b2] mb-10" data-aos="fade-up">Our Mission & Vision</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Intersection of Art & Resiliency -->
            <div class="bg-white p-6 rounded-xl shadow-lg border-t-4 border-[#0097b2] transition-transform duration-300 hover:scale-105" data-aos="fade-up">
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Intersection of Art & Resiliency</h3>
                <p class="text-base text-gray-700">
                    At GoodLand, we leverage art as a powerful tool to create meaningful community dialogues. These dialogues lead to tangible solutions that address the unique challenges faced by Bantayan Island.
                </p>
            </div>

            <!-- Vision Statement -->
            <div class="bg-white p-6 rounded-xl shadow-lg border-t-4 border-[#0097b2] transition-transform duration-300 hover:scale-105" data-aos="fade-up" data-aos-delay="200">
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Vision Statement</h3>
                <p class="text-base text-gray-700">
                    Empowering Bantayan Islanders to enjoy a quality life in an ecologically balanced environment where communities thrive in harmony with nature.
                </p>
            </div>

            <!-- Mission Statement -->
            <div class="bg-white p-6 rounded-xl shadow-lg border-t-4 border-[#0097b2] transition-transform duration-300 hover:scale-105" data-aos="fade-up" data-aos-delay="400">
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Mission Statement</h3>
                <p class="text-base text-gray-700">
                    Using art and collaboration to address social, economic, and environmental issues facing Bantayan Island through sustainable, community-driven solutions that respect local culture and traditions.
                </p>
            </div>
        </div>
    </div>
</section>


<!-- Partnership Section -->
<section class="bg-gray-100 py-16">
    <div class="max-w-6xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-[#0066cc] mb-10">Our Partners</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            
            <!-- Local Government -->
            <div class="bg-white shadow-md rounded-xl p-6 flex flex-col items-center transition hover:shadow-lg hover:bg-[#0066cc] hover:text-white">
                <i class="fa-solid fa-building text-[#0066cc] text-5xl mb-4 transition hover:text-white"></i>
                <h4 class="text-lg font-semibold text-gray-700 transition hover:text-white">Local Government</h4>
                <p class="text-gray-600 text-sm mt-2 transition hover:text-gray-200">Supporting community initiatives and providing resources</p>
            </div>

            <!-- Educational Institutions -->
            <div class="bg-white shadow-md rounded-xl p-6 flex flex-col items-center transition hover:shadow-lg hover:bg-[#0066cc] hover:text-white">
                <i class="fa-solid fa-graduation-cap text-[#0066cc] text-5xl mb-4 transition hover:text-white"></i>
                <h4 class="text-lg font-semibold text-gray-700 transition hover:text-white">Educational Institutions</h4>
                <p class="text-gray-600 text-sm mt-2 transition hover:text-gray-200">Research collaboration and youth engagement</p>
            </div>

            <!-- Environmental NGOs -->
            <div class="bg-white shadow-md rounded-xl p-6 flex flex-col items-center transition hover:shadow-lg hover:bg-[#0066cc] hover:text-white">
                <i class="fa-solid fa-globe text-[#0066cc] text-5xl mb-4 transition hover:text-white"></i>
                <h4 class="text-lg font-semibold text-gray-700 transition hover:text-white">Environmental NGOs</h4>
                <p class="text-gray-600 text-sm mt-2 transition hover:text-gray-200">Joint conservation efforts and awareness campaigns</p>
            </div>

            <!-- Community Groups -->
            <div class="bg-white shadow-md rounded-xl p-6 flex flex-col items-center transition hover:shadow-lg hover:bg-[#0066cc] hover:text-white">
                <i class="fa-solid fa-users text-[#0066cc] text-5xl mb-4 transition hover:text-white"></i>
                <h4 class="text-lg font-semibold text-gray-700 transition hover:text-white">Community Groups</h4>
                <p class="text-gray-600 text-sm mt-2 transition hover:text-gray-200">Grassroots collaboration and local knowledge</p>
            </div>

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

    <!-- Footer Section -->
    <?php include 'includes/footer.php' ?>
</body>

</html>