<section class="section about">
    <figure class="about__figure figure">
        <div class="figure__img"></div>
    </figure>
    <div class="about__wrap">
        <h2 class="about__title">We are pleased to introduce IG Green</h2>
        <p class="about__desc">Investment platform focused on supporting and advancing technologies that contribute to
            protecting the planet and improving the quality of life on Earth. Our investments cover a wide range of
            green technologies, including solar and wind energy, as well as the development of infrastructure for
            electric vehicles and charging stations. However, IG Green’s primary goal remains not only profitability but
            also ensuring the planet’s sustainability for future generations.</p>
    </div>
</section>

<script>
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
                },
                {
                    root: null,
                    threshold: 0.1,
                }
            );

            observer.observe(aboutSection);
        }
    });
</script>