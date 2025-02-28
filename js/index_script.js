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
// Enhanced carousel functionality without auto-slide
document.addEventListener('DOMContentLoaded', function () {
    // Main Banner Carousel
    const slides = document.querySelectorAll('.carousel-slide');
    const dots = document.querySelectorAll('.carousel-nav-button');
    const prevArrow = document.querySelector('.prev-arrow');
    const nextArrow = document.querySelector('.next-arrow');
    const secondVideo = document.getElementById('secondVideo');
    let currentSlide = 0;

    function showSlide(index) {
        // Hide all slides
        slides.forEach(slide => {
            slide.classList.remove('active');
        });

        // Update dots
        dots.forEach(dot => {
            dot.classList.remove('active');
        });

        // Show the current slide and dot
        slides[index].classList.add('active');
        dots[index].classList.add('active');

        // Handle video playback
        if (index === 1) {
            secondVideo.play();
            secondVideo.muted = false;
        } else {
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

    // Set up event listeners
    nextArrow.addEventListener('click', () => {
        nextSlide();
    });

    prevArrow.addEventListener('click', () => {
        prevSlide();
    });

    // Dot navigation
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            currentSlide = index;
            showSlide(currentSlide);
        });
    });

    // Events Carousel
    const eventsCarousel = document.querySelector('.events-carousel');
    const eventsCards = document.querySelectorAll('.event-card');
    const prevButton = document.querySelector('.carousel-prev');
    const nextButton = document.querySelector('.carousel-next');

    const cardsPerSlide = 3;
    const totalSlides = Math.ceil(eventsCards.length / cardsPerSlide);
    let currentEventsSlide = 0;

    // Hide all cards initially except first three
    function initializeEventsCarousel() {
        eventsCards.forEach((card, index) => {
            if (index < cardsPerSlide) {
                card.style.display = 'flex';
            } else {
                card.style.display = 'none';
            }
        });
    }

    function showEventsSlide(slideIndex) {
        const startIdx = slideIndex * cardsPerSlide;
        const endIdx = startIdx + cardsPerSlide;

        eventsCards.forEach((card, index) => {
            if (index >= startIdx && index < endIdx) {
                card.style.display = 'flex';
            } else {
                card.style.display = 'none';
            }
        });
    }

    // Previous button click handler
    prevButton.addEventListener('click', function () {
        currentEventsSlide = (currentEventsSlide - 1 + totalSlides) % totalSlides;
        showEventsSlide(currentEventsSlide);
    });

    // Next button click handler
    nextButton.addEventListener('click', function () {
        currentEventsSlide = (currentEventsSlide + 1) % totalSlides;
        showEventsSlide(currentEventsSlide);
    });

    // Initialize the events carousel
    initializeEventsCarousel();
});