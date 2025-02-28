<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eco Energy Navigation</title>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="footer.css">
</head>

<body>

    <?php include 'includes/nav_bar.php' ?>

    <!-- Carousel Section -->
    <div class="carousel">
        <div class="carousel-wrapper">
            <!-- First Slide -->
            <div class="carousel-slide active">
                <div class="carousel-columns">
                    <div class="carousel-content">
                        <h1>FINDING LOCAL SOLUTIONS TO GLOBAL PROBLEMS</h1>
                        <p>Our mission is to facilitate the realization of an empowered, self-sufficient, and resilient
                            community by using art and collaborations to address the social, economic, and environmental
                            issues on Bantayan Island.</p>
                        <div class="carousel-buttons">
                            <a href="#" class="btn-primary">Read More</a>
                            <a href="#" class="btn-secondary">Get Involved</a>
                        </div>
                    </div>
                    <div class="carousel-video">
                        <div class="video-frame">
                            <video src="img/2Dc0FAcVaYwjGSXsz8kpz.mp4" autoplay muted loop playsinline></video>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Second Slide -->
            <div class="carousel-slide">
                <div class="carousel-columns">
                    <div class="carousel-content">
                        <h1>Heading 2</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat
                            non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <div class="carousel-buttons">
                            <a href="#" class="btn-primary">Our Solutions</a>
                            <a href="#" class="btn-secondary">Contact Us</a>
                        </div>
                    </div>
                    <div class="carousel-video">
                        <div class="video-frame">
                            <video id="secondVideo" src="img/481209746_9044792452297942_2873886158743139648_n.mp4" loop
                                playsinline></video>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Third Slide -->
            <div class="carousel-slide">
                <div class="carousel-content">
                    <h1>Heading 3</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div class="carousel-buttons">
                        <a href="#" class="btn-primary">Learn More</a>
                        <a href="#" class="btn-secondary">Join Our Programs</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carousel navigation dots -->
        <div class="carousel-nav">
            <div class="carousel-nav-button active" data-slide="0"></div>
            <div class="carousel-nav-button" data-slide="1"></div>
            <div class="carousel-nav-button" data-slide="2"></div>
        </div>

        <!-- Carousel arrows -->
        <div class="carousel-arrows">
            <div class="arrow prev-arrow">
                <i class="fa-solid fa-chevron-left"></i>
            </div>
            <div class="arrow next-arrow">
                <i class="fa-solid fa-chevron-right"></i>
            </div>
        </div>
    </div>

    <!-- About Us Section -->
    <section id="aboutus">
        <div class="about-container">
            <div class="about-image">
                <figure>
                    <img src="img/who_we_are.jpg" alt="Eco Energy Team">
                </figure>
            </div>
            <div class="about-text">
                <h2>WHO WE ARE</h2>
                <h3>We are a Non-Government(NGO) asssociation, based on Bantayan Island, Cebu who aims to help the
                    community through community based projects and programs.</h3>
                <p>Through our community based projects, we invesion to contribute to the community and environmental
                    preservation, and also youth education.</p>

                <a href="#" class="button">Learn More</a>
                <a href="#" class="button">Our Projects</a>
            </div>
        </div>
    </section>

    <section class="goodland-section">
        <div class="goodland-container">
            <div class="goodland-content">
                <div class="goodland-subtitle">Core of Goodland</div>
                <p class="goodland-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <div class="goodland-features">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fa-solid fa-leaf"></i>
                        </div>
                        <div class="feature-text">Tubig</div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fa-solid fa-solar-panel"></i>
                        </div>
                        <div class="feature-text">Pagkaon</div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fa-solid fa-seedling"></i>
                        </div>
                        <div class="feature-text">Culture</div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fa-solid fa-recycle"></i>
                        </div>
                        <div class="feature-text">Self Development</div>
                    </div>
                </div>
                <a href="#" class="goodland-button">Learn More</a>
            </div>
            <div class="goodland-image">
                <img src="img/50c947c56c5545e72bfa3fed84699f86.jpg" alt="Sustainable Energy Solutions">
            </div>
        </div>
    </section>

    <!-- Events Section -->
    <section id="events" class="events-section">
        <div class="events-header">
            <h2>Events</h2>
            <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>

        <div class="events-grid-container">
            <div class="events-grid">
                <!-- Featured Event Card (Large) -->
                <div class="event-card event-card-featured">
                    <div class="event-card-inner">
                        <div class="event-image">
                            <img src="https://picsum.photos/800/500" alt="Tree Planting Event">
                        </div>
                        <div class="event-overlay"></div>
                        <div class="event-category">Environment</div>
                        <div class="event-content">
                            <h3 class="event-title">Interesting Ways To Study Climate Change</h3>
                            <div class="event-meta">
                                <div class="event-date">
                                    <i class="fa-regular fa-calendar"></i>
                                    <span>08 MAY, 2025</span>
                                </div>
                                <div class="event-location">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <span>Miami, California</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Medium Event Card 1 -->
                <div class="event-card event-card-medium">
                    <div class="event-card-inner">
                        <div class="event-image">
                            <img src="https://picsum.photos/500/300" alt="Renewable Energy Summit">
                        </div>
                        <div class="event-overlay"></div>
                        <div class="event-category">Energy</div>
                        <div class="event-content">
                            <h3 class="event-title">Renewable Energy Summit for Homeowners</h3>
                            <div class="event-meta">
                                <div class="event-date">
                                    <i class="fa-regular fa-calendar"></i>
                                    <span>15 MAY, 2025</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Medium Event Card 2 -->
                <div class="event-card event-card-medium">
                    <div class="event-card-inner">
                        <div class="event-image">
                            <img src="https://picsum.photos/500/300?random=2" alt="Workshop on Solar Panel">
                        </div>
                        <div class="event-overlay"></div>
                        <div class="event-category">Workshop</div>
                        <div class="event-content">
                            <h3 class="event-title">Workshop on Solar Panel Installation</h3>
                            <div class="event-meta">
                                <div class="event-date">
                                    <i class="fa-regular fa-calendar"></i>
                                    <span>22 MAY, 2025</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Small Event Card 1 -->
                <div class="event-card event-card-small">
                    <div class="event-card-inner">
                        <div class="event-image">
                            <img src="https://picsum.photos/500/300?random=3" alt="Community Clean-up">
                        </div>
                        <div class="event-overlay"></div>
                        <div class="event-category">Community</div>
                        <div class="event-content">
                            <h3 class="event-title">Community Beach Clean-up and Recycling Initiative</h3>
                            <div class="event-meta">
                                <div class="event-date">
                                    <i class="fa-regular fa-calendar"></i>
                                    <span>01 JUN, 2025</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Small Event Card 2 -->
                <div class="event-card event-card-small">
                    <div class="event-card-inner">
                        <div class="event-image">
                            <img src="https://picsum.photos/500/300?random=4" alt="Green Business Expo">
                        </div>
                        <div class="event-overlay"></div>
                        <div class="event-category">Expo</div>
                        <div class="event-content">
                            <h3 class="event-title">Green Business Expo and Sustainable Technologies</h3>
                            <div class="event-meta">
                                <div class="event-date">
                                    <i class="fa-regular fa-calendar"></i>
                                    <span>10 JUN, 2025</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Small Event Card 3 -->
                <div class="event-card event-card-small">
                    <div class="event-card-inner">
                        <div class="event-image">
                            <img src="https://picsum.photos/500/300?random=5" alt="Energy Efficiency">
                        </div>
                        <div class="event-overlay"></div>
                        <div class="event-category">Tech</div>
                        <div class="event-content">
                            <h3 class="event-title">Smart Home Energy Efficiency Technology Seminar</h3>
                            <div class="event-meta">
                                <div class="event-date">
                                    <i class="fa-regular fa-calendar"></i>
                                    <span>18 JUN, 2025</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest Projects Section -->
    <section id="projects" class="projects-section">
        <div class="projects-header">
            <h2>Latest Projects</h2>
            <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt utlaborere magna aliqua.</p>
        </div>
        <div class="projects-grid">
            <!-- Project 1 -->
            <div class="project-card">
                <div class="project-image">
                    <img src="https://picsum.photos/300/201" alt="Planting Initiative">
                    <div class="project-overlay">
                        <h3>Planting Initiative</h3>
                        <p>For Environmental Sustainability</p>
                    </div>
                </div>
                <div class="project-info">
                    <h3>Planting Initiative: Sustainable Solutions for Urban Environments</h3>
                    <p class="project-author">Emma Roberts • 15 Feb 2025</p>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="project-card">
                <div class="project-image">
                    <img src="https://picsum.photos/300/202" alt="Wind Energy">
                    <div class="project-overlay">
                        <h3>Wind Energy Project</h3>
                        <p>Harnessing Natural Power</p>
                    </div>
                </div>
                <div class="project-info">
                    <h3>Wind Energy Project: Top 5 Innovations Changing Renewables</h3>
                    <p class="project-author">David Chen • 22 Jan 2025</p>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="project-card">
                <div class="project-image">
                    <img src="https://picsum.photos/300/203" alt="Forest Conservation">
                    <div class="project-overlay">
                        <h3>Forest Conservation</h3>
                        <p>Protecting Natural Habitats</p>
                    </div>
                </div>
                <div class="project-info">
                    <h3>Forest Conservation in Action: Where Do We Draw the Line?</h3>
                    <p class="project-author">Sarah Johnson • 05 Feb 2025</p>
                </div>
            </div>

            <!-- Project 4 -->
            <div class="project-card">
                <div class="project-image">
                    <img src="https://picsum.photos/300/204" alt="Water Conservation">
                    <div class="project-overlay">
                        <h3>Water Conservation</h3>
                        <p>Preserving Our Resources</p>
                    </div>
                </div>
                <div class="project-info">
                    <h3>Advantages of Water Conservation: What Communities Should Know?</h3>
                    <p class="project-author">Michael Okonkwo • 18 Dec 2024</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Carousel Section -->
    <section id="testimonials" class="testimonials-section">
        <div class="testimonials-header">
            <h2>Shared Experiences</h2>
            <p>Hear from our community members about their experiences with us.</p>
        </div>

        <!-- Tab Buttons -->
        <div class="testimonial-tabs">
            <button class="tab-button active" data-tab="text">Message</button>
            <button class="tab-button" data-tab="video">Video</button>
        </div>

        <div class="testimonials-carousel-container">
            <!-- Text Testimonial Tab -->
            <div class="testimonial-tab-content active" id="text">
                <div class="testimonials-carousel">
                    <!-- Text Testimonial Card -->
                    <div class="testimonial-card">
                        <div class="testimonial-profile">
                            <img src="https://picsum.photos/300/207" alt="Profile Picture">
                            <h3>John Doe</h3>
                        </div>
                        <div class="testimonial-content">
                            <p>"Eco Energy has transformed our community with sustainable solutions. Their projects have
                                empowered us to take charge of our environment."</p>
                        </div>
                    </div>
                    <!-- Additional Text Testimonial Card -->
                    <div class="testimonial-card">
                        <div class="testimonial-profile">
                            <img src="https://picsum.photos/300/208" alt="Profile Picture">
                            <h3>Jane Doe</h3>
                        </div>
                        <div class="testimonial-content">
                            <p>"The initiatives by Eco Energy have greatly improved our quality of life and brought us
                                closer as a community."</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Video Testimonial Tab -->
            <div class="testimonial-tab-content" id="video">
                <div class="testimonials-carousel">
                    <!-- Video Testimonial Card -->
                    <div class="testimonial-card">
                        <div class="testimonial-profile">
                            <img src="https://picsum.photos/300/209" alt="Profile Picture">
                            <h3>Jane Smith</h3>
                        </div>
                        <div class="testimonial-video">
                            <video controls>
                                <source src="video/testimonial.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                    <!-- Additional Video Testimonial Card -->
                    <div class="testimonial-card">
                        <div class="testimonial-profile">
                            <img src="https://picsum.photos/300/210" alt="Profile Picture">
                            <h3>Mark Johnson</h3>
                        </div>
                        <div class="testimonial-video">
                            <video controls>
                                <source src="video/testimonial2.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <?php include 'includes/footer.php' ?>


    <script src="js/index_script.js"></script>

</body>

</html>