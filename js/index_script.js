document.addEventListener('DOMContentLoaded', function () {
    // Tab functionality
    document.querySelectorAll('.tab-button').forEach(button => {
        button.addEventListener('click', () => {
            const tab = button.getAttribute('data-tab');

            document.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove('active'));
            document.querySelectorAll('.testimonial-tab-content').forEach(content => content.classList.remove('active'));

            button.classList.add('active');
            document.getElementById(tab).classList.add('active');
        });
    });

    // Main Banner Carousel
    const slides = document.querySelectorAll('.carousel-slide');
    const dots = document.querySelectorAll('.carousel-nav-button');
    const prevArrow = document.querySelector('.prev-arrow');
    const nextArrow = document.querySelector('.next-arrow');
    const secondVideo = document.getElementById('secondVideo');
    let currentSlide = 0;

    if (slides.length && dots.length) {
        function showSlide(index) {
            slides.forEach(slide => slide.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));

            slides[index].classList.add('active');
            dots[index].classList.add('active');

            if (secondVideo && index === 1) {
                secondVideo.play();
                secondVideo.muted = false;
            } else if (secondVideo) {
                secondVideo.pause();
                secondVideo.muted = true;
            }
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
        }

        if (nextArrow) nextArrow.addEventListener('click', nextSlide);
        if (prevArrow) prevArrow.addEventListener('click', prevSlide);

        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                currentSlide = index;
                showSlide(currentSlide);
            });
        });
    }

    // Events Carousel
    const eventsCarousel = document.querySelector('.events-carousel');
    const eventsCards = document.querySelectorAll('.event-card');
    const prevButton = document.querySelector('.carousel-prev');
    const nextButton = document.querySelector('.carousel-next');

    if (eventsCards.length && (prevButton || nextButton)) {
        const cardsPerSlide = 3;
        const totalSlides = Math.ceil(eventsCards.length / cardsPerSlide);
        let currentEventsSlide = 0;

        function initializeEventsCarousel() {
            eventsCards.forEach((card, index) => {
                card.style.display = index < cardsPerSlide ? 'flex' : 'none';
            });
        }

        function showEventsSlide(slideIndex) {
            const startIdx = slideIndex * cardsPerSlide;
            const endIdx = startIdx + cardsPerSlide;

            eventsCards.forEach((card, index) => {
                card.style.display = index >= startIdx && index < endIdx ? 'flex' : 'none';
            });
        }

        if (prevButton) {
            prevButton.addEventListener('click', function () {
                currentEventsSlide = (currentEventsSlide - 1 + totalSlides) % totalSlides;
                showEventsSlide(currentEventsSlide);
            });
        }

        if (nextButton) {
            nextButton.addEventListener('click', function () {
                currentEventsSlide = (currentEventsSlide + 1) % totalSlides;
                showEventsSlide(currentEventsSlide);
            });
        }

        initializeEventsCarousel();
    }

    // Stories Carousel functionality
    const storySlides = document.querySelectorAll('.stories-carousel-slide');
    const storyDots = document.querySelectorAll('.carousel-dot');
    const categoryButtons = document.querySelectorAll('.category-button');
    const storyCards = document.querySelectorAll('.stories-card');
    let currentStorySlide = 0;

    if (storySlides.length && storyDots.length) {
        function showStorySlide(index) {
            // Hide all slides
            storySlides.forEach(slide => {
                slide.classList.remove('active');
            });

            // Update dots
            storyDots.forEach(dot => {
                dot.classList.remove('active');
            });

            // Show the current slide and dot
            storySlides[index].classList.add('active');
            storyDots[index].classList.add('active');

            currentStorySlide = index;
        }

        // Dot navigation for stories carousel
        storyDots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                showStorySlide(index);
            });
        });

        // Swipe functionality for stories carousel
        let startX = 0;
        let endX = 0;

        const storiesCarouselTrack = document.querySelector('.stories-carousel-track');

        if (storiesCarouselTrack) {
            storiesCarouselTrack.addEventListener('touchstart', function (e) {
                startX = e.touches[0].clientX;
            });

            storiesCarouselTrack.addEventListener('touchmove', function (e) {
                endX = e.touches[0].clientX;
            });

            storiesCarouselTrack.addEventListener('touchend', function () {
                const threshold = 50; // Minimum swipe distance in pixels
                if (startX - endX > threshold) {
                    // Swipe left
                    currentStorySlide = (currentStorySlide + 1) % storySlides.length;
                    showStorySlide(currentStorySlide);
                } else if (endX - startX > threshold) {
                    // Swipe right
                    currentStorySlide = (currentStorySlide - 1 + storySlides.length) % storySlides.length;
                    showStorySlide(currentStorySlide);
                }
            });
        }

        // Category filter functionality
        if (categoryButtons.length) {
            categoryButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    categoryButtons.forEach(btn => btn.classList.remove('active'));

                    // Add active class to clicked button
                    this.classList.add('active');

                    const selectedCategory = this.getAttribute('data-category');

                    // Show/hide cards based on category
                    storyCards.forEach(card => {
                        const cardCategory = card.getAttribute('data-category');

                        if (selectedCategory === 'all' || cardCategory === selectedCategory) {
                            card.style.display = 'flex';
                        } else {
                            card.style.display = 'none';
                        }
                    });

                    // After filtering, check if current slide has visible cards
                    checkVisibleCardsAndAdjust();
                });
            });
        }

        // Function to check if current slide has visible cards after filtering
        function checkVisibleCardsAndAdjust() {
            const currentCarouselSlide = document.querySelector('.stories-carousel-slide.active');
            if (!currentCarouselSlide) return;

            const visibleCards = Array.from(currentCarouselSlide.querySelectorAll('.stories-card')).filter(card => {
                return window.getComputedStyle(card).display !== 'none';
            });

            // If no visible cards in current slide, find a slide with visible cards
            if (visibleCards.length === 0) {
                for (let i = 0; i < storySlides.length; i++) {
                    const slideVisibleCards = Array.from(storySlides[i].querySelectorAll('.stories-card')).filter(card => {
                        return window.getComputedStyle(card).display !== 'none';
                    });

                    if (slideVisibleCards.length > 0) {
                        showStorySlide(i);
                        break;
                    }
                }
            }
        }
    }

    // Video play functionality for stories section
    const videoThumbnails = document.querySelectorAll('.video-thumbnail');

    videoThumbnails.forEach(thumbnail => {
        thumbnail.addEventListener('click', function() {
            // In a real implementation, this would open a modal with the video
            console.log('Play video');
        });
    });
});