// Enhanced carousel functionality with slide animations
document.addEventListener('DOMContentLoaded', function () {
    // Tab functionality
    document.querySelectorAll('.tab-button').forEach(button => {
        button.addEventListener('click', () => {
            const tab = button.getAttribute('data-tab');

            document.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove('active'));
            document.querySelectorAll('.testimonial-tab-content').forEach(content => content.classList.remove('active'));

            button.classList.add('active');
            document.getElementById(tab).classList.add('active');
            
            // Reinitialize the Stories Carousel if it's in the active tab
            const activeTabContent = document.getElementById(tab);
            if (activeTabContent.querySelector('.stories-carousel') && window.initializeStoryCarousel) {
                window.initializeStoryCarousel();
            }
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

    // Events Carousel
    const eventsCarousel = document.querySelector('.events-carousel');
    const eventsCards = document.querySelectorAll('.event-card');
    const prevButton = document.querySelector('.carousel-prev');
    const nextButton = document.querySelector('.carousel-next');

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

    // Stories Carousel functionality
    const storySlides = document.querySelectorAll('.stories-carousel-slide');
    const storyDots = document.querySelectorAll('.carousel-dot');
    let storyPrevArrow = document.querySelector('.stories-carousel .prev-arrow');
    let storyNextArrow = document.querySelector('.stories-carousel .next-arrow');
    const categoryButtons = document.querySelectorAll('.category-button');
    const storyCards = document.querySelectorAll('.stories-card');
    const storiesTrack = document.querySelector('.stories-carousel-track');
    const storiesCarouselDots = document.querySelector('.stories-carousel-dots');
    let currentStorySlide = 0;
    let isAnimating = false;
    let cardsPerStorySlide = 3;  // Cards per slide

    if (storySlides.length && categoryButtons.length) {
        // Store original cards for re-organization
        const originalCards = Array.from(storyCards);

        // Function to rebuild slides based on filtered cards
        function rebuildSlides(visibleCards) {
            // Clear existing slides
            storiesTrack.innerHTML = '';
            storiesCarouselDots.innerHTML = '';
            
            // Create new slides with 3 cards per slide
            const totalSlides = Math.ceil(visibleCards.length / cardsPerStorySlide);
            
            for (let i = 0; i < totalSlides; i++) {
                // Create new slide
                const slide = document.createElement('div');
                slide.className = 'stories-carousel-slide';
                if (i === 0) slide.classList.add('active');
                
                // Create grid container for cards
                const grid = document.createElement('div');
                grid.className = 'stories-grid';
                
                // Add up to 3 cards to this slide
                for (let j = i * cardsPerStorySlide; j < Math.min((i + 1) * cardsPerStorySlide, visibleCards.length); j++) {
                    grid.appendChild(visibleCards[j].cloneNode(true));
                }
                
                // If we have fewer than 3 cards, add placeholder divs to maintain grid structure
                const remainingSlots = cardsPerStorySlide - (Math.min((i + 1) * cardsPerStorySlide, visibleCards.length) - (i * cardsPerStorySlide));
                for (let k = 0; k < remainingSlots; k++) {
                    const placeholder = document.createElement('div');
                    placeholder.className = 'stories-card placeholder';
                    placeholder.style.visibility = 'hidden';
                    grid.appendChild(placeholder);
                }
                
                slide.appendChild(grid);
                storiesTrack.appendChild(slide);
                
                // Create corresponding dot
                const dot = document.createElement('button');
                dot.className = 'carousel-dot';
                if (i === 0) dot.classList.add('active');
                dot.setAttribute('data-slide', i);
                storiesCarouselDots.appendChild(dot);
            }
            
            // Reset current slide
            currentStorySlide = 0;
            
            // Ensure at least one slide exists
            if (totalSlides === 0) {
                const slide = document.createElement('div');
                slide.className = 'stories-carousel-slide active';
                
                const grid = document.createElement('div');
                grid.className = 'stories-grid';
                
                const message = document.createElement('div');
                message.className = 'no-stories-message';
                message.textContent = 'No stories found in this category.';
                
                grid.appendChild(message);
                slide.appendChild(grid);
                storiesTrack.appendChild(slide);
                
                // Add a single dot for the empty slide
                const dot = document.createElement('button');
                dot.className = 'carousel-dot active';
                dot.setAttribute('data-slide', 0);
                storiesCarouselDots.appendChild(dot);
            }
            
            // Re-identify navigation elements (they've been recreated)
            storyPrevArrow = document.querySelector('.stories-carousel .prev-arrow');
            storyNextArrow = document.querySelector('.stories-carousel .next-arrow');
            
            // Reinitialize carousel after rebuilding
            initializeStoryCarousel();
        }
        
        // Define initializeStoryCarousel in global scope so it can be accessed by tab handler
        window.initializeStoryCarousel = function() {
            // Get updated slide elements
            const updatedSlides = document.querySelectorAll('.stories-carousel-slide');
            const updatedDots = document.querySelectorAll('.carousel-dot');
            
            if (!updatedSlides.length) return;
            
            // Add animation
            function animateSlide(from, to, direction) {
                if (isAnimating) return;
                isAnimating = true;
                
                // Set initial positions
                updatedSlides[from].style.position = 'absolute';
                updatedSlides[from].style.width = '100%';
                updatedSlides[from].style.transition = 'transform 0.5s ease-in-out';
                updatedSlides[from].style.zIndex = '1';
                
                updatedSlides[to].style.position = 'absolute';
                updatedSlides[to].style.width = '100%';
                updatedSlides[to].style.transition = 'transform 0.5s ease-in-out';
                updatedSlides[to].style.zIndex = '2';
                
                // Set starting position for the incoming slide
                updatedSlides[to].style.transform = direction === 'next' ? 'translateX(100%)' : 'translateX(-100%)';
                updatedSlides[to].classList.add('active');
                
                // Trigger animation after a small delay to ensure styles are applied
                setTimeout(() => {
                    updatedSlides[from].style.transform = direction === 'next' ? 'translateX(-100%)' : 'translateX(100%)';
                    updatedSlides[to].style.transform = 'translateX(0)';
                    
                    // Clean up after animation
                    setTimeout(() => {
                        updatedSlides[from].classList.remove('active');
                        updatedSlides[from].style = '';
                        updatedSlides[to].style = '';
                        
                        // Update dots synchronously with the end of animation
                        updateDots(to);
                        
                        isAnimating = false;
                    }, 500);
                }, 50);
                
                // Update current slide index
                currentStorySlide = to;
            }
            
            // Function to update dots - extracted to make it reusable
            function updateDots(activeIndex) {
                const allDots = document.querySelectorAll('.carousel-dot');
                allDots.forEach((dot, index) => {
                    if (index === activeIndex) {
                        dot.classList.add('active');
                    } else {
                        dot.classList.remove('active');
                    }
                });
            }
            
            function showStorySlide(index, direction) {
                if (index === currentStorySlide || isAnimating) return;
                
                const totalSlides = updatedSlides.length;
                if (index >= totalSlides) index = 0;
                if (index < 0) index = totalSlides - 1;
                
                if (direction) {
                    animateSlide(currentStorySlide, index, direction);
                } else {
                    // Determine direction based on index
                    const dir = index > currentStorySlide ? 'next' : 'prev';
                    animateSlide(currentStorySlide, index, dir);
                }
                
                // Immediately update dots for responsive feedback
                updateDots(index);
            }
            
            function nextStorySlide() {
                const nextIndex = (currentStorySlide + 1) % updatedSlides.length;
                showStorySlide(nextIndex, 'next');
            }
            
            function prevStorySlide() {
                const prevIndex = (currentStorySlide - 1 + updatedSlides.length) % updatedSlides.length;
                showStorySlide(prevIndex, 'prev');
            }
            
            // Clear existing event listeners and set up new ones for carousel dots
            updatedDots.forEach((dot, index) => {
                // Remove old listeners by cloning and replacing
                const newDot = dot.cloneNode(true);
                dot.parentNode.replaceChild(newDot, dot);
                
                newDot.addEventListener('click', () => {
                    showStorySlide(index);
                });
            });
            
            // Set up event listeners for the story carousel arrows
            if (storyPrevArrow) {
                // Remove old listeners by replacing with clone
                const newPrevArrow = storyPrevArrow.cloneNode(true);
                storyPrevArrow.parentNode.replaceChild(newPrevArrow, storyPrevArrow);
                storyPrevArrow = newPrevArrow;
                
                storyPrevArrow.addEventListener('click', () => {
                    prevStorySlide();
                });
                
                // Always ensure visibility
                storyPrevArrow.style.display = 'flex';
            }
            
            if (storyNextArrow) {
                // Remove old listeners by replacing with clone
                const newNextArrow = storyNextArrow.cloneNode(true);
                storyNextArrow.parentNode.replaceChild(newNextArrow, storyNextArrow);
                storyNextArrow = newNextArrow;
                
                storyNextArrow.addEventListener('click', () => {
                    nextStorySlide();
                });
                
                // Always ensure visibility
                storyNextArrow.style.display = 'flex';
            }
            
            // Initialize the carousel by setting position styles for the track
            if (updatedSlides.length > 0) {
                storiesTrack.style.position = 'relative';
                storiesTrack.style.height = `${updatedSlides[0].offsetHeight}px`;
            }
            
            // Always ensure navigation is visible
            if (storiesCarouselDots) {
                storiesCarouselDots.style.display = 'flex';
            }

            // Re-add click events to any video thumbnails
            const videoThumbnails = document.querySelectorAll('.video-thumbnail');
            videoThumbnails.forEach(thumbnail => {
                const newThumbnail = thumbnail.cloneNode(true);
                thumbnail.parentNode.replaceChild(newThumbnail, thumbnail);
                
                newThumbnail.addEventListener('click', function() {
                    console.log('Play video');
                });
            });
            
            // Ensure dots are correctly set for initial state
            updateDots(currentStorySlide);
        };
        
        // Category filter functionality
        categoryButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                categoryButtons.forEach(btn => btn.classList.remove('active'));
                
                // Add active class to clicked button
                this.classList.add('active');
                
                const selectedCategory = this.getAttribute('data-category');
                
                // Get visible cards based on category
                const visibleCards = originalCards.filter(card => {
                    const cardCategory = card.getAttribute('data-category');
                    return (selectedCategory === 'all' || cardCategory === selectedCategory);
                });
                
                // Rebuild slides with the filtered cards
                rebuildSlides(visibleCards);
            });
        });
        
        // Initialize with all cards
        window.initializeStoryCarousel();
        
        // Add resize listener to adjust height when window resizes
        window.addEventListener('resize', function() {
            const activeSlide = document.querySelector('.stories-carousel-slide.active');
            if (activeSlide) {
                storiesTrack.style.height = `${activeSlide.offsetHeight}px`;
            }
        });
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