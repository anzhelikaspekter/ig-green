document.addEventListener("DOMContentLoaded", () => {
    const prioritySection = document.querySelector(".priority");
    const animatedElements = document.querySelectorAll(
        ".priority, .priority__header, .priority__item, .priority__count"
    );

    if (prioritySection) {
        const observer = new IntersectionObserver(
            (entries, observer) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        animatedElements.forEach((element) => {
                            element.style.animationPlayState = "running";
                        });
                        observer.unobserve(prioritySection);
                    }
                });
            }, {
            root: null,
            threshold: 0.1,
        }
        );

        observer.observe(prioritySection);
    }
});