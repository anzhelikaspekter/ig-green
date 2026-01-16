document.addEventListener("DOMContentLoaded", () => {
    const aboutSection = document.querySelector(".about");
    const animatedElements = document.querySelectorAll(".about, .about__title::after, .about__wrap");

    if (aboutSection) {
        const observer = new IntersectionObserver(
            (entries, observer) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        animatedElements.forEach((element) => {
                            element.style.animationPlayState = "running";
                        });
                        observer.unobserve(aboutSection);
                    }
                });
            }, {
            root: null,
            threshold: 0.1,
        }
        );

        observer.observe(aboutSection);
    }
});