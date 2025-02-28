 // Wait for the DOM to fully load
 document.addEventListener('DOMContentLoaded', function() {
    // Get the navigation bar element
    const navbar = document.querySelector('.navigation');
    
    // Get the original position of the navbar
    const navbarOffset = navbar.offsetTop;
    
    // Function to handle scrolling
    function handleScroll() {
        // Check if we've scrolled past the original position of the navbar
        if (window.pageYOffset >= navbarOffset) {
            // Add the sticky class to the navbar
            navbar.classList.add('sticky');
            
            // Add padding to the body to prevent content jump
            document.body.style.paddingTop = navbar.offsetHeight + 'px';
        } else {
            // Remove the sticky class
            navbar.classList.remove('sticky');
            
            // Remove the padding from the body
            document.body.style.paddingTop = 0;
        }
    }
    
    // Add scroll event listener
    window.addEventListener('scroll', handleScroll);
});

// Wait for the DOM to fully load
document.addEventListener('DOMContentLoaded', function() {
    // Create the progress bar element
    const progressBar = document.createElement('div');
    progressBar.className = 'scroll-progress-bar';
    
    // Insert the progress bar after the navigation bar
    const navbar = document.querySelector('.navigation');
    navbar.parentNode.insertBefore(progressBar, navbar.nextSibling);
    
    // Function to update the progress bar width based on scroll position
    function updateProgressBar() {
        // Calculate how far down the page the user has scrolled
        const scrollPosition = window.scrollY;
        
        // Calculate the total scrollable height of the document
        const scrollHeight = document.documentElement.scrollHeight - window.innerHeight;
        
        // Calculate the scroll percentage
        const scrollPercentage = (scrollPosition / scrollHeight) * 100;
        
        // Update the progress bar width
        progressBar.style.width = scrollPercentage + '%';
    }
    
    // Add scroll event listener to update the progress bar
    window.addEventListener('scroll', updateProgressBar);
    
    // Initialize the progress bar
    updateProgressBar();
});