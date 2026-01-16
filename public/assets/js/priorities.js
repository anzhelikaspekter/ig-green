document.addEventListener("DOMContentLoaded", () => {
    const prioritiesSection = document.querySelector(".priorities");
    const animatedElements = document.querySelectorAll(
        ".priorities, .priorities__wrap--subtitle, .priorities__wrap--title, .priorities__wrap--wrap, .priorities__wrap--desc-title, .priorities__wrap--desc, .priorities__info--img, .priorities__item"
    );

    if (prioritiesSection) {
        const observer = new IntersectionObserver(
            (entries, observer) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        animatedElements.forEach((element) => {
                            element.style.animationPlayState = "running";
                        });
                        observer.unobserve(prioritiesSection);
                    }
                });
            }, {
            root: null,
            threshold: 0.1,
        }
        );

        observer.observe(prioritiesSection);
    }
});