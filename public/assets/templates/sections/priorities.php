<section class="section priorities" id="priorities">
    <div class="priorities__wrap">
        <p class="priorities__wrap--subtitle">// Our Priorities</p>
        <h2 class="priorities__wrap--title">Sustainable Growth For A Green Future</h2>
        <div class="priorities__wrap--wrap">
            <p class="priorities__wrap--desc-title">Join the Future of Green Energy</p>
            <p class="priorities__wrap--desc">Each year, the green energy market grows, strengthening our belief that
                sustainable development is the future we must all support. We offer a unique opportunity to be part of
                this process and benefit from the growth of one of the most promising industries. Together, we can not
                only generate profits but also make a positive impact on the planet.</p>
        </div>
    </div>
    <div class="priorities__info">
        <div class="priorities__info--img"></div>
        <ul class="priorities__list">
            <li class="priorities__item">
                <div class="priorities__icon"><span class="icon portfolio"></span></div>
                <div class="priorities__item--wrap">
                    <h3 class="priorities__item--title">Portfolio Diversification</h3>
                    <p class="priorities__item--desc">We actively develop multiple areas within green energy, allowing
                        us to minimize risks and ensure high, long-term returns.</p>
                </div>
            </li>
            <li class="priorities__item">
                <div class="priorities__icon"><span class="icon energy"></span></div>
                <div class="priorities__item--wrap">
                    <h3 class="priorities__item--title">Energy Independence</h3>
                    <p class="priorities__item--desc">Beyond investing in eco-friendly projects, we are committed to
                        fostering sustainable and energy-independent regions.</p>
                </div>
            </li>
            <li class="priorities__item">
                <div class="priorities__icon"><span class="icon charity"></span></div>
                <div class="priorities__item--wrap">
                    <h3 class="priorities__item--title">Social Responsibility</h3>
                    <p class="priorities__item--desc">Our projects are not only economically profitable but also
                        contribute to improving the global environmental situation, enhancing quality of life, and
                        reducing environmental impact.</p>
                </div>
            </li>
        </ul>
    </div>
</section>

<script>
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
                },
                {
                    root: null,
                    threshold: 0.1,
                }
            );

            observer.observe(prioritiesSection);
        }
    });

</script>