<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - GoodLand</title>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="includes/footer.css">
    <link rel="stylesheet" href="projects.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

   <!-- Top Bar with logo, contact info and consultation button -->
   <?php include 'includes/nav_bar.php'?>

<div class="hero">
    <h1>GET TO KNOW GOODLAND</h1>
  <p>Home / About Us</p>
</div>
<!-- About Section with Soft Shadows & Floating Effect -->
<section class="max-w-6xl mx-auto px-6 py-16 relative">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
        <div class="p-8 bg-white rounded-xl shadow-lg backdrop-blur-lg bg-opacity-80 border border-gray-300 transform hover:scale-105 transition-transform duration-300">
            <h2 class="text-4xl font-semibold text-gray-900">What We Do</h2>
            <p class="text-lg text-gray-700 mt-4">
                GoodLand is an art-driven NGO under Martha Atienza’s Art Lab, focusing on community collaborations 
                for social, economic, and environmental solutions on Bantayan Island. We follow the 
                <span class="font-semibold">"Place, People, and Art-based Model"</span> to foster sustainable change.
            </p>
        </div>
        <div class="relative">
            <img src="img/bateri.png" alt="GoodLand Initiative" class="rounded-xl shadow-xl transform hover:scale-105 transition-transform duration-300">
            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/40 to-transparent blur-xl opacity-50"></div>
        </div>
    </div>
</section>
<!-- Mission Statement with Gradient Glow -->
<section class="relative py-16 bg-gray-900 text-white">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,_rgba(255,255,255,0.1),_transparent)]"></div>
    <div class="max-w-6xl mx-auto px-6 text-center relative z-10">
        <h2 class="text-4xl font-semibold text-white drop-shadow-lg">Intersection of Art & Resiliency</h2>
        <p class="text-lg mt-4 max-w-3xl mx-auto text-gray-300">
            Through art, we foster meaningful community dialogues that lead to real-world solutions.
        </p>
        <div class="mt-8 flex justify-center">
            <img src="img/peopleplace.png" alt="Community Art" class="rounded-xl shadow-xl backdrop-blur-lg transform hover:scale-105 transition-transform duration-300 hover:shadow-2xl">
        </div>
    </div>
</section>
<!-- Mission & Vision with Modern Glassmorphism -->
<section class="relative py-20 bg-gradient-to-br from-gray-100 to-gray-300">
    <!-- Background Glow Effect -->
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,_rgba(255,255,255,0.3),_transparent)]"></div>

    <div class="max-w-6xl mx-auto px-6 text-center relative z-10">
        <h2 class="text-4xl font-semibold text-gray-900 drop-shadow-md">Mission & Vision</h2>
        <p class="text-lg text-gray-700 mt-4 max-w-3xl mx-auto">
            We strive to create an empowered, self-sufficient, and resilient community through art-driven collaborations that promote social, economic, and environmental sustainability.
        </p>
    </div>

    <!-- Glassmorphism Cards -->
    <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
        <!-- Vision -->
        <div class="p-8 rounded-xl shadow-2xl text-center backdrop-blur-lg bg-white/20 border border-white/40 transform hover:scale-105 transition-all duration-300">
            <h3 class="text-2xl font-semibold text-[#0097b2]">Our Vision</h3>
            <p class="text-lg text-gray-800 mt-4">
                Empowering Bantayan Islanders to enjoy a quality life in an ecologically balanced environment through shared dreams and collective action.
            </p>
        </div>

        <!-- Mission -->
        <div class="p-8 rounded-xl shadow-2xl text-center backdrop-blur-lg bg-white/20 border border-white/40 transform hover:scale-105 transition-all duration-300">
            <h3 class="text-2xl font-semibold text-[#0097b2]">Our Mission</h3>
            <p class="text-lg text-gray-800 mt-4">
                Using art and collaboration as tools to address social, economic, and environmental challenges while fostering community engagement and sustainability.
            </p>
        </div>
    </div>
</section>
<!-- Gallery Section -->
<section class="max-w-6xl mx-auto px-6 py-16 text-center">
    <h2 class="text-3xl font-semibold text-gray-900 drop-shadow-lg">Collage & Memories</h2>
    <div class="mt-8 grid grid-cols-2 md:grid-cols-4 gap-4">
        <img src="images/event1.jpg" alt="Event 1" class="rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-300">
        <img src="images/event2.jpg" alt="Event 2" class="rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-300">
        <img src="images/event3.jpg" alt="Event 3" class="rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-300">
        <img src="images/event4.jpg" alt="Event 4" class="rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-300">
    </div>
</section>
<!-- Team Members with Neumorphism -->
<section class="bg-gray-200 py-16">
    <div class="max-w-6xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-semibold text-gray-900 drop-shadow-lg">Meet Our Team</h2>
        <div class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-xl shadow-xl flex flex-col items-center hover:shadow-2xl transition-shadow duration-300">
                <img src="images/martha_atienza.jpg" alt="Martha Atienza" class="w-24 h-24 rounded-full shadow-md">
                <h3 class="text-xl font-semibold mt-4">Martha Atienza</h3>
                <p class="text-gray-600">Visual artist focused on environmental and social issues.</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-xl flex flex-col items-center hover:shadow-2xl transition-shadow duration-300">
                <img src="images/jake_atienza.jpg" alt="Jake Atienza" class="w-24 h-24 rounded-full shadow-md">
                <h3 class="text-xl font-semibold mt-4">Jake Atienza</h3>
                <p class="text-gray-600">Interdisciplinary researcher and artist.</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-xl flex flex-col items-center hover:shadow-2xl transition-shadow duration-300">
                <img src="images/bihiya_warriors.jpg" alt="Bihiya Warriors" class="w-24 h-24 rounded-full shadow-md">
                <h3 class="text-xl font-semibold mt-4">Bihiya Warriors</h3>
                <p class="text-gray-600">Youth-led community group promoting sustainability.</p>
            </div>
        </div>
    </div>
</section>


    <?php include 'includes/footer.php'?>

    <script src="js/project_script.js"></script>
</body>
</html>
