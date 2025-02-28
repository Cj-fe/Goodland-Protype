// Tab and category filter functionality
document.addEventListener('DOMContentLoaded', function() {
    // Original tab functionality (kept from existing code)
    document.querySelectorAll('.tab-button').forEach(button => {
      button.addEventListener('click', () => {
          const tab = button.getAttribute('data-tab');
  
          document.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove('active'));
          document.querySelectorAll('.testimonial-tab-content').forEach(content => content.classList.remove('active'));
  
          button.classList.add('active');
          document.getElementById(tab).classList.add('active');
      });
    });
  
    // New category filter functionality for news cards
    const categoryButtons = document.querySelectorAll('.category-button');
    const newsCards = document.querySelectorAll('.news-card');
    
    categoryButtons.forEach(button => {
      button.addEventListener('click', function() {
        // Remove active class from all buttons
        categoryButtons.forEach(btn => btn.classList.remove('active'));
        
        // Add active class to clicked button
        this.classList.add('active');
        
        const selectedCategory = this.getAttribute('data-category');
        
        // Show/hide cards based on category
        newsCards.forEach(card => {
          if (selectedCategory === 'all' || card.getAttribute('data-category') === selectedCategory) {
            card.style.display = 'flex';
          } else {
            card.style.display = 'none';
          }
        });
      });
    });
    
    // Video play functionality
    const videoThumbnails = document.querySelectorAll('.video-thumbnail');
    
    videoThumbnails.forEach(thumbnail => {
      thumbnail.addEventListener('click', function() {
        // In a real implementation, this would open a modal with the video
        // or trigger video playback
        console.log('Play video');
        
        // Video handling based on existing carousel code
        // Could integrate with secondVideo.play() logic from your existing code
      });
    });
    
    // Main Banner Carousel (kept from existing code)
    const slides = document.querySelectorAll('.carousel-slide');
    const dots = document.querySelectorAll('.carousel-nav-button');
    const prevArrow = document.querySelector('.prev-arrow');
    const nextArrow = document.querySelector('.next-arrow');
    const secondVideo = document.getElementById('secondVideo');
    let currentSlide = 0;
  
    // Only initialize if elements exist
    if (slides.length && dots.length) {
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
  
      // Set up event listeners
      if (nextArrow) {
        nextArrow.addEventListener('click', () => {
            nextSlide();
        });
      }
  
      if (prevArrow) {
        prevArrow.addEventListener('click', () => {
            prevSlide();
        });
      }
  
      // Dot navigation
      dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            currentSlide = index;
            showSlide(currentSlide);
        });
      });
    }
  
    // Events Carousel (kept from existing code)
    const eventsCarousel = document.querySelector('.events-carousel');
    const eventsCards = document.querySelectorAll('.event-card');
    const prevButton = document.querySelector('.carousel-prev');
    const nextButton = document.querySelector('.carousel-next');
  
    // Only initialize if elements exist
    if (eventsCards.length && (prevButton || nextButton)) {
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
      if (prevButton) {
        prevButton.addEventListener('click', function () {
            currentEventsSlide = (currentEventsSlide - 1 + totalSlides) % totalSlides;
            showEventsSlide(currentEventsSlide);
        });
      }
  
      // Next button click handler
      if (nextButton) {
        nextButton.addEventListener('click', function () {
            currentEventsSlide = (currentEventsSlide + 1) % totalSlides;
            showEventsSlide(currentEventsSlide);
        });
      }
  
      // Initialize the events carousel
      initializeEventsCarousel();
    }
  });