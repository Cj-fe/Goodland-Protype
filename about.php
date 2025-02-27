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
    <h1>Get To Know GoodLand</h1>
  <p>Home / About Us</p>
</div>
<!-- About Section with Enhanced Header & Floating Effect -->
<section class="max-w-7xl mx-auto px-6 py-16 relative">
    <!-- Section Header -->
    <div class="text-center mb-12">
        <h2 class="text-5xl font-extrabold text-gray-900 relative inline-block">
            What We Do
            <span class="block w-24 h-1 bg-[#0097b2] rounded-md absolute left-1/2 transform -translate-x-1/2 bottom-[-10px]"></span>
        </h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <!-- Content Box -->
        <div class="p-8 bg-white rounded-xl shadow-xl backdrop-blur-lg bg-opacity-80 border border-gray-300 transform hover:scale-105 transition-transform duration-300">
            <p class="text-lg text-gray-700 leading-relaxed">
                GoodLand is an art-driven NGO under Martha Atienza’s Art Lab, focusing on community collaborations 
                for social, economic, and environmental solutions on Bantayan Island. We follow the 
                <span class="font-semibold">"Place, People, and Art-based Model"</span> to foster sustainable change.
            </p>
            <a href="#" class="inline-block mt-6 bg-[#193A1A] text-white px-6 py-3 rounded-md font-semibold text-lg transition-all duration-300 hover:bg-[#2c5a2d] hover:-translate-y-1 hover:shadow-lg">
                Learn More <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>

        <!-- Image with Glow Effect -->
        <div class="relative">
            <img src="img/bateri.png" alt="GoodLand Initiative" class="rounded-xl shadow-xl transform hover:scale-105 transition-transform duration-300">
            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/40 to-transparent blur-2xl opacity-50"></div>
        </div>
    </div>
</section>

<!-- Mission Statement with Gradient Glow & Enhanced Header -->
<section class="relative py-20 bg-gray-900 text-white">
    <!-- Subtle Radial Glow -->
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,_rgba(255,255,255,0.1),_transparent)]"></div>

    <div class="max-w-7xl mx-auto px-6 text-center relative z-10">
        <!-- Section Header -->
        <h2 class="text-5xl font-extrabold text-white relative inline-block">
            Intersection of Art & Resiliency
            <span class="block w-28 h-1 bg-[#0097b2] rounded-md absolute left-1/2 transform -translate-x-1/2 bottom-[-10px]"></span>
        </h2>

        <p class="text-lg mt-6 max-w-3xl mx-auto text-gray-300 leading-relaxed">
            Through art, we foster meaningful community dialogues that lead to real-world solutions.
        </p>

        <!-- Image with Floating Glow Effect -->
        <div class="mt-10 flex justify-center relative">
            <img src="img/peopleplace.png" alt="Community Art" 
                class="rounded-xl shadow-xl backdrop-blur-lg transform hover:scale-105 transition-transform duration-300 hover:shadow-2xl">
            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent blur-xl opacity-40"></div>
        </div>

      
    </div>
</section>

<!-- Mission & Vision with Parallax Background and Glassmorphism -->
<section class="relative py-20 bg-fixed bg-center bg-cover" style="background-image: url('img/BATERI.PNG');">
    <!-- Overlay for Better Readability -->
    <div class="absolute inset-0 bg-black/50"></div>

    <div class="max-w-6xl mx-auto px-6 text-center relative z-10">
        <!-- Header with Modern Styling -->
        <h2 class="text-5xl font-extrabold text-white relative inline-block">
            Mission & Vision
            <span class="block w-28 h-1 bg-[#0097b2] rounded-md absolute left-1/2 transform -translate-x-1/2 bottom-[-10px]"></span>
        </h2>

        <p class="text-lg text-gray-200 mt-4 max-w-3xl mx-auto leading-relaxed">
            We strive to create an empowered, self-sufficient, and resilient community through art-driven collaborations that promote social, economic, and environmental sustainability.
        </p>
    </div>

    <!-- Glassmorphism Cards -->
    <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto relative z-10">
        <!-- Vision -->
        <div class="p-8 rounded-xl shadow-2xl text-center backdrop-blur-lg bg-white/20 border border-white/30 transform hover:scale-105 transition-all duration-300">
            <h3 class="text-2xl font-semibold text-[#0097b2]">Our Vision</h3>
            <p class="text-lg text-white mt-4">
                Empowering Bantayan Islanders to enjoy a quality life in an ecologically balanced environment through shared dreams and collective action.
            </p>
        </div>

        <!-- Mission -->
        <div class="p-8 rounded-xl shadow-2xl text-center backdrop-blur-lg bg-white/20 border border-white/30 transform hover:scale-105 transition-all duration-300">
            <h3 class="text-2xl font-semibold text-[#0097b2]">Our Mission</h3>
            <p class="text-lg text-white mt-4">
                Using art and collaboration as tools to address social, economic, and environmental challenges while fostering community engagement and sustainability.
            </p>
        </div>
    </div>
</section>

<!-- Full-Width Collage & Memories with Enhanced Styling -->
<section class="w-full px-4 py-20 text-center bg-gray-100">
    <div class="max-w-7xl mx-auto">
        <!-- Section Header -->
        <h2 class="text-5xl font-extrabold text-gray-900 relative inline-block">
            Collage & Memories
            <span class="block w-32 h-1 bg-[#0097b2] rounded-md absolute left-1/2 transform -translate-x-1/2 bottom-[-10px]"></span>
        </h2>
        
        <!-- Image Grid -->
        <div class="mt-12 grid grid-cols-2 md:grid-cols-4 gap-6">
            
            <!-- Gallery Item -->
            <div class="relative group overflow-hidden shadow-lg">
                <img src="img/bateri.png" alt="Community Gathering" class="w-full transform group-hover:scale-105 transition-transform duration-300">
                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <p class="text-white font-semibold text-lg">Community Gathering</p>
                </div>
            </div>

            <div class="relative group overflow-hidden shadow-lg">
                <img src="img/bateri.png" alt="Environmental Workshop" class="w-full transform group-hover:scale-105 transition-transform duration-300">
                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <p class="text-white font-semibold text-lg">Environmental Workshop</p>
                </div>
            </div>

            <div class="relative group overflow-hidden shadow-lg">
                <img src="img/bateri.png" alt="Art for Awareness" class="w-full transform group-hover:scale-105 transition-transform duration-300">
                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <p class="text-white font-semibold text-lg">Art for Awareness</p>
                </div>
            </div>

            <div class="relative group overflow-hidden shadow-lg">
                <img src="img/bateri.png" alt="Sustainability Talks" class="w-full transform group-hover:scale-105 transition-transform duration-300">
                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <p class="text-white font-semibold text-lg">Sustainability Talks</p>
                </div>
            </div>

            <div class="relative group overflow-hidden shadow-lg">
                <img src="img/bateri.png" alt="Community Cleanup" class="w-full transform group-hover:scale-105 transition-transform duration-300">
                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <p class="text-white font-semibold text-lg">Community Cleanup</p>
                </div>
            </div>

            <div class="relative group overflow-hidden shadow-lg">
                <img src="img/bateri.png" alt="Local Art Showcase" class="w-full transform group-hover:scale-105 transition-transform duration-300">
                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <p class="text-white font-semibold text-lg">Local Art Showcase</p>
                </div>
            </div>

            <div class="relative group overflow-hidden shadow-lg">
                <img src="img/bateri.png" alt="Youth Engagement" class="w-full transform group-hover:scale-105 transition-transform duration-300">
                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <p class="text-white font-semibold text-lg">Youth Engagement</p>
                </div>
            </div>

            <div class="relative group overflow-hidden shadow-lg">
                <img src="img/bateri.png" alt="Eco-friendly Initiatives" class="w-full transform group-hover:scale-105 transition-transform duration-300">
                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <p class="text-white font-semibold text-lg">Eco-friendly Initiatives</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Meet Our Team Section -->
<section class="bg-gray-100 py-20">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <!-- Section Header -->
        <h2 class="text-5xl font-extrabold text-gray-900 relative inline-block">
            Meet Our Team
            <span class="block w-32 h-1 bg-[#0097b2] rounded-md absolute left-1/2 transform -translate-x-1/2 bottom-[-10px]"></span>
        </h2>
        <p class="text-lg text-gray-700 mt-4 max-w-3xl mx-auto">
            A passionate team dedicated to fostering sustainable change through art, collaboration, and community engagement.
        </p>

        <!-- Team Grid -->
        <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
            
            <!-- Team Member -->
            <div class="bg-white shadow-lg hover:shadow-2xl transition-shadow duration-300 rounded-lg overflow-hidden">
                <img src="img/bateri.png" alt="Martha Atienza" class="w-full h-72 object-cover">
                <div class="p-6 text-left">
                    <h3 class="text-2xl font-semibold text-gray-900">Martha Atienza</h3>
                    <p class="text-gray-600 text-sm">Visual Artist & Founder</p>
                    <p class="text-gray-700 text-sm mt-2">
                        Award-winning artist addressing social and environmental issues through art and community-driven projects.
                    </p>
                </div>
            </div>

            <div class="bg-white shadow-lg hover:shadow-2xl transition-shadow duration-300 rounded-lg overflow-hidden">
                <img src="img/bateri.png" alt="Jake Atienza" class="w-full h-72 object-cover">
                <div class="p-6 text-left">
                    <h3 class="text-2xl font-semibold text-gray-900">Jake Atienza</h3>
                    <p class="text-gray-600 text-sm">Interdisciplinary Researcher</p>
                    <p class="text-gray-700 text-sm mt-2">
                        Exploring the intersection of science, community, and art to drive meaningful social impact.
                    </p>
                </div>
            </div>

            <div class="bg-white shadow-lg hover:shadow-2xl transition-shadow duration-300 rounded-lg overflow-hidden">
                <img src="img/bateri.png" alt="Bihiya Warriors" class="w-full h-72 object-cover">
                <div class="p-6 text-left">
                    <h3 class="text-2xl font-semibold text-gray-900">Bihiya Warriors</h3>
                    <p class="text-gray-600 text-sm">Youth-Led Community Group</p>
                    <p class="text-gray-700 text-sm mt-2">
                        A collective of young changemakers promoting environmental sustainability and community resilience.
                    </p>
                </div>
            </div>

            <div class="bg-white shadow-lg hover:shadow-2xl transition-shadow duration-300 rounded-lg overflow-hidden">
                <img src="img/bateri.png" alt="Martha Atienza" class="w-full h-72 object-cover">
                <div class="p-6 text-left">
                    <h3 class="text-2xl font-semibold text-gray-900">Martha Atienza</h3>
                    <p class="text-gray-600 text-sm">Visual Artist & Founder</p>
                    <p class="text-gray-700 text-sm mt-2">
                        Award-winning artist addressing social and environmental issues through art and community-driven projects.
                    </p>
                </div>
            </div>

            <div class="bg-white shadow-lg hover:shadow-2xl transition-shadow duration-300 rounded-lg overflow-hidden">
                <img src="img/bateri.png" alt="Jake Atienza" class="w-full h-72 object-cover">
                <div class="p-6 text-left">
                    <h3 class="text-2xl font-semibold text-gray-900">Jake Atienza</h3>
                    <p class="text-gray-600 text-sm">Interdisciplinary Researcher</p>
                    <p class="text-gray-700 text-sm mt-2">
                        Exploring the intersection of science, community, and art to drive meaningful social impact.
                    </p>
                </div>
            </div>

            <div class="bg-white shadow-lg hover:shadow-2xl transition-shadow duration-300 rounded-lg overflow-hidden">
                <img src="img/bateri.png" alt="Bihiya Warriors" class="w-full h-72 object-cover">
                <div class="p-6 text-left">
                    <h3 class="text-2xl font-semibold text-gray-900">Bihiya Warriors</h3>
                    <p class="text-gray-600 text-sm">Youth-Led Community Group</p>
                    <p class="text-gray-700 text-sm mt-2">
                        A collective of young changemakers promoting environmental sustainability and community resilience.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>


    <?php include 'includes/footer.php'?>

    <script src="js/project_script.js"></script>
</body>
</html>
