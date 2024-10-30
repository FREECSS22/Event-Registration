document.addEventListener("DOMContentLoaded", function() {
    const navLinks = document.querySelectorAll(".nav-links li a");

    function updateActiveLink() {
        const scrollPosition = window.scrollY;

        document.querySelectorAll("section").forEach(section => {
            const sectionTop = section.offsetTop - 60;
            const sectionHeight = section.offsetHeight;
            const sectionId = section.getAttribute("id");

            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                navLinks.forEach(link => {
                    link.classList.remove("active");
                    if (link.getAttribute("href") === `#${sectionId}`) {
                        link.classList.add("active");
                    }
                });
            }
        });
    }

    window.addEventListener("scroll", updateActiveLink);
    updateActiveLink();
});

