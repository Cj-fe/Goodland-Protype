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
</head>

<body>
   
    <?php include 'includes/nav_bar.php'?>
    
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
                            issues on Bantayan Island</p>
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
                            <video id="secondVideo" src="img/481209746_9044792452297942_2873886158743139648_n.mp4" loop playsinline></video>
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

    <!-- Events Carousel Section -->
    <section id="events" class="events-section">
        <div class="events-header">
            <h2>Events</h2>
            <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>

        <div class="events-carousel-container">
            <div class="events-carousel">
                <!-- Event Card 1 -->
                <div class="event-card">
                    <div class="event-image">
                        <img src="https://picsum.photos/300/211 alt=" Tree Planting Event">
                        <div class="event-date">
                            <span class="day">08</span>
                            <span class="month">MAY</span>
                        </div>
                    </div>
                    <div class="event-details">
                        <div class="event-time">
                            <i class="fa-regular fa-clock"></i>
                            <span>11:00 Am - 01:30 pm</span>
                        </div>
                        <div class="event-location">
                            <i class="fa-solid fa-location-dot"></i>
                            <span>2351 NW 2nd Ave, Miami, Building NT Square, California</span>
                        </div>
                        <h3 class="event-title">You can Interesting Ways To Study Climate Change</h3>
                    </div>
                </div>

                <!-- Event Card 2 -->
                <div class="event-card">
                    <div class="event-image">
                        <img src="https://picsum.photos/300/200" alt="Eco Partnership">
                        <div class="event-date">
                            <span class="day">15</span>
                            <span class="month">MAY</span>
                        </div>
                    </div>
                    <div class="event-details">
                        <div class="event-time">
                            <i class="fa-regular fa-clock"></i>
                            <span>10:00 Am - 12:30 pm</span>
                        </div>
                        <div class="event-location">
                            <i class="fa-solid fa-location-dot"></i>
                            <span>1250 Market St, San Francisco, California</span>
                        </div>
                        <h3 class="event-title">Renewable Energy Summit for Homeowners</h3>
                    </div>
                </div>

                <!-- Event Card 3 -->
                <div class="event-card">
                    <div class="event-image">
                        <img src="https://picsum.photos/300/200" alt="Energy Innovation">
                        <div class="event-date">
                            <span class="day">22</span>
                            <span class="month">MAY</span>
                        </div>
                    </div>
                    <div class="event-details">
                        <div class="event-time">
                            <i class="fa-regular fa-clock"></i>
                            <span>09:00 Am - 02:00 pm</span>
                        </div>
                        <div class="event-location">
                            <i class="fa-solid fa-location-dot"></i>
                            <span>780 Green Ave, San Diego, California</span>
                        </div>
                        <h3 class="event-title">Workshop on Solar Panel Installation</h3>
                    </div>
                </div>

                <!-- Event Card 4 -->
                <div class="event-card">
                    <div class="event-image">
                        <img src="https://picsum.photos/300/200" alt="Community Clean-up">
                        <div class="event-date">
                            <span class="day">01</span>
                            <span class="month">JUN</span>
                        </div>
                    </div>
                    <div class="event-details">
                        <div class="event-time">
                            <i class="fa-regular fa-clock"></i>
                            <span>08:30 Am - 11:30 am</span>
                        </div>
                        <div class="event-location">
                            <i class="fa-solid fa-location-dot"></i>
                            <span>Beach Drive, Los Angeles, California</span>
                        </div>
                        <h3 class="event-title">Community Beach Clean-up and Recycling Initiative</h3>
                    </div>
                </div>

                <!-- Event Card 5 -->
                <div class="event-card">
                    <div class="event-image">
                        <img src="https://picsum.photos/300/200" alt="Green Business Expo">
                        <div class="event-date">
                            <span class="day">10</span>
                            <span class="month">JUN</span>
                        </div>
                    </div>
                    <div class="event-details">
                        <div class="event-time">
                            <i class="fa-regular fa-clock"></i>
                            <span>09:00 Am - 04:00 pm</span>
                        </div>
                        <div class="event-location">
                            <i class="fa-solid fa-location-dot"></i>
                            <span>Convention Center, Santa Clara, California</span>
                        </div>
                        <h3 class="event-title">Green Business Expo and Sustainable Technologies Showcase</h3>
                    </div>
                </div>

                <!-- Event Card 6 -->
                <div class="event-card">
                    <div class="event-image">
                        <img src="https://picsum.photos/300/200" alt="Energy Efficiency">
                        <div class="event-date">
                            <span class="day">18</span>
                            <span class="month">JUN</span>
                        </div>
                    </div>
                    <div class="event-details">
                        <div class="event-time">
                            <i class="fa-regular fa-clock"></i>
                            <span>01:00 Pm - 03:30 pm</span>
                        </div>
                        <div class="event-location">
                            <i class="fa-solid fa-location-dot"></i>
                            <span>Tech Center, Palo Alto, California</span>
                        </div>
                        <h3 class="event-title">Smart Home Energy Efficiency Technology Seminar</h3>
                    </div>
                </div>
            </div>

            <!-- Carousel Navigation -->
            <button class="carousel-prev">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <button class="carousel-next">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
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
                </div>
                <div class="project-details">
                    <h3>Planting Initiative</h3>
                    <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
                    <a href="#">View Details</a>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="project-card">
                <div class="project-image">
                    <img src="https://picsum.photos/300/202" alt="Wind Energy">
                </div>
                <div class="project-details">
                    <h3>Wind Energy Project</h3>
                    <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
                    <a href="#">View Details</a>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="project-card">
                <div class="project-image">
                    <img src="https://picsum.photos/300/203" alt="Forest Conservation">
                </div>
                <div class="project-details">
                    <h3>Forest Conservation</h3>
                    <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
                    <a href="#">View Details</a>
                </div>
            </div>

            <!-- Project 4 -->
            <div class="project-card">
                <div class="project-image">
                    <img src="https://picsum.photos/300/204" alt="Water Conservation">
                </div>
                <div class="project-details">
                    <h3>Water Conservation</h3>
                    <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
                    <a href="#">View Details</a>
                </div>
            </div>

            <!-- Project 5 -->
            <div class="project-card">
                <div class="project-image">
                    <img src="https://picsum.photos/300/205" alt="Soil Regeneration">
                </div>
                <div class="project-details">
                    <h3>Soil Regeneration</h3>
                    <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
                    <a href="#">View Details</a>
                </div>
            </div>

            <!-- Project 6 -->
            <div class="project-card">
                <div class="project-image">
                    <img src="https://picsum.photos/300/206" alt="Wildlife Protection">
                </div>
                <div class="project-details">
                    <h3>Wildlife Protection</h3>
                    <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
                    <a href="#">View Details</a>
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

    <script src="js/index_script.js"></script>

</body>

</html>