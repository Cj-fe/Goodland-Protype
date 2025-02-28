// Wait for the DOM to fully load
document.addEventListener('DOMContentLoaded', function() {
    // Get the navigation bar element
    const navbar = document.querySelector('.navigation');
    
    // Get the original position of the navbar
    const navbarOffset = navbar.offsetTop;
    
    // Function to handle scrolling for sticky navbar
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
    
    // Add scroll event listener for sticky navbar
    window.addEventListener('scroll', handleScroll);
    
    // Create the progress bar element
    const progressBar = document.createElement('div');
    progressBar.className = 'scroll-progress-bar';
    
    // Insert the progress bar after the navigation bar
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
    
    // Get all navigation links
    const navLinks = document.querySelectorAll('.nav-links a');
    
    // Get current page URL
    const currentUrl = window.location.href;
    
    // Function to handle active and visited links
    function handleActiveLinks() {
        // Loop through all navigation links
        navLinks.forEach(link => {
            // Check if the link href is in the current URL
            if (currentUrl.includes(link.getAttribute('href'))) {
                // Add active class to current page link
                link.classList.add('active');
            }
            
            // Add event listener for when a link is clicked
            link.addEventListener('click', function() {
                // Add visited class when a link is clicked
                this.classList.add('visited');
                
                // Store visited links in localStorage
                const visitedLinks = JSON.parse(localStorage.getItem('visitedLinks') || '[]');
                if (!visitedLinks.includes(link.getAttribute('href'))) {
                    visitedLinks.push(link.getAttribute('href'));
                    localStorage.setItem('visitedLinks', JSON.stringify(visitedLinks));
                }
            });
        });
        
        // Check for previously visited links from localStorage
        const storedVisitedLinks = JSON.parse(localStorage.getItem('visitedLinks') || '[]');
        navLinks.forEach(link => {
            if (storedVisitedLinks.includes(link.getAttribute('href'))) {
                link.classList.add('visited');
            }
        });
    }
    
    // Initialize active and visited links
    handleActiveLinks();
    
    // Add functionality for the search icon (optional)
    const searchIcon = document.querySelector('.search-icon');
    if (searchIcon) {
        searchIcon.addEventListener('click', function() {
            // You can implement search functionality here
            // For example, toggle a search input field
            alert('Search functionality will be implemented here');
        });
    }
});