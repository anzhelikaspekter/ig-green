<section class="section priority" id="directions">
    <header class="priority__header">
        <p class="priority__subtitle">// Our Priority Areas</p>
        <h2 class="priority__title">Driving Green Innovation</h2>
    </header>
    <ul class="priority__list">
        <li class="priority__item">
            <div class="priority__item--header">
                <div class="priority__item--wrap">
                    <p class="priority__count">01</p>
                    <div class="priority__icon"><span class="icon solar-energy"></span></div>
                </div>
                <h3 class="priority__item--title">Solar Energy</h3>
            </div>
            <div class="priority__item--footer">
                <p class="priority__desc">We actively invest in solar panel installation projects, helping to reduce
                    dependence on fossil fuels and mitigate climate impact. Solar farms are becoming key components in
                    the transition to clean energy.</p>
                <div class="priority__icon"><span class="icon solar-energy"></span></div>
            </div>
        </li>
        <li class="priority__item">
            <div class="priority__item--header">
                <div class="priority__item--wrap">
                    <p class="priority__count">02</p>
                    <div class="priority__icon"><span class="icon wind-turbine"></span></div>
                </div>
                <h3 class="priority__item--title">Wind Energy</h3>
            </div>
            <div class="priority__item--footer">
                <p class="priority__desc">Wind power is one of the fastest-growing and most efficient sectors in green
                    energy. Investing in wind farms not only reduces pollution but also creates new jobs and provides
                    long-term environmental and economic stability.</p>
                <div class="priority__icon"><span class="icon wind-turbine"></span></div>
            </div>
            <div class="priority__item--img-wrap">
                <div class="priority__item--img"></div>
            </div>
        </li>
        <li class="priority__item">
            <div class="priority__item--header">
                <div class="priority__item--wrap">
                    <p class="priority__count">03</p>
                    <div class="priority__icon"><span class="icon electric-vehicles"></span></div>
                </div>
                <h3 class="priority__item--title">Electric Vehicles</h3>
            </div>
            <div class="priority__item--footer">
                <p class="priority__desc">We invest in the development and production of electric vehicles, contributing
                    to cleaner air and reducing oil dependency. Supporting the electric vehicle industry is not only
                    about protecting the planet but also about creating new business opportunities. Many countries are
                    already actively encouraging electric vehicle production, offering subsidies not only for
                    manufacturers but also for consumers purchasing electric cars.</p>
                <div class="priority__icon"><span class="icon electric-vehicles"></span></div>
            </div>
        </li>
        <li class="priority__item">
            <div class="priority__item--header">
                <div class="priority__item--wrap">
                    <p class="priority__count">04</p>
                    <div class="priority__icon"><span class="icon charging-stations"></span></div>
                </div>
                <h3 class="priority__item--title">Electric Vehicle <br> Charging Stations</h3>
            </div>
            <div class="priority__item--footer">
                <p class="priority__desc">We support electric vehicle infrastructure by investing in the installation of
                    modern charging stations in major cities, along highways, and at key locations. This will help
                    accelerate the transition to environmentally friendly transportation.</p>
                <div class="priority__icon"><span class="icon charging-stations"></span></div>
            </div>
        </li>
    </ul>
</section>

<script>
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
                },
                {
                    root: null,
                    threshold: 0.1,
                }
            );

            observer.observe(prioritySection);
        }
    });
</script>