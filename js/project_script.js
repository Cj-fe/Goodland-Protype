document.addEventListener("DOMContentLoaded", function () {
    const paragraphs = document.querySelectorAll(".projects p");

    function handleScroll() {
        paragraphs.forEach((p) => {
            const rect = p.getBoundingClientRect();
            if (rect.top < window.innerHeight - 50) {
                p.classList.add("show");
            }
        });
    }

    window.addEventListener("scroll", handleScroll);
    handleScroll(); // Run once to check already visible elements
});

document.addEventListener("DOMContentLoaded", function () {
    const images = document.querySelectorAll(".project-item img");

    function handleScroll() {
        images.forEach((img) => {
            const rect = img.getBoundingClientRect();
            if (rect.top < window.innerHeight - 50) {
                img.classList.add("show");
            }
        });
    }

    window.addEventListener("scroll", handleScroll);
    handleScroll(); // Run once to check already visible elements
});

document.addEventListener("DOMContentLoaded", function () {
    const projectContents = document.querySelectorAll(".project-content");

    function handleScroll() {
        projectContents.forEach((content) => {
            const rect = content.getBoundingClientRect();
            if (rect.top < window.innerHeight - 50) {
                content.classList.add("show");
            }
        });
    }

    window.addEventListener("scroll", handleScroll);
    handleScroll(); // Run once to check already visible elements
});
