document.addEventListener("DOMContentLoaded", () => {
    const missionSection = document.querySelector(".mission");
    const animatedElements = document.querySelectorAll(
        ".mission, .mission__title, .mission__wrap, .mission__desc, .mission__desc--secondary::after"
    );

    if (missionSection) {
        const observer = new IntersectionObserver(
            (entries, observer) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        animatedElements.forEach((element) => {
                            element.style.animationPlayState = "running";
                        });
                        observer.unobserve(missionSection);
                    }
                });
            }, {
            root: null,
            threshold: 0.1,
        }
        );

        observer.observe(missionSection);
    }
});