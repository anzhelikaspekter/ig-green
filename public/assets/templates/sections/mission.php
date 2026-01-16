<section class="section mission" id="mission">
    <h2 class="mission__title">// Our Mission</h2>
    <div class="mission__wrap">
        <p class="mission__desc">We believe that the future lies in <span
                class="mission__desc mission__desc--secondary">sustainable development</span>, and <span
                class="mission__desc mission__desc--secondary">our mission is to support technologies</span> that reduce
            the
            <span class="mission__desc mission__desc--secondary">negative impact on the environment</span>. At <span
                class="mission__desc mission__desc--secondary">IG Green, we invest in solutions aimed</span> at reducing
            carbon emissions, <span class="mission__desc mission__desc--secondary">improving air and water
                quality</span>,
            and transitioning to clean, renewable energy. This includes not only solar <span
                class="mission__desc mission__desc--secondary">panels and wind turbines</span> but also the production
            of
            <span class="mission__desc mission__desc--secondary">eco-friendly electric vehicles</span>, the development
            of
            <span class="mission__desc mission__desc--secondary">charging infrastructure</span>, and other projects in
            the
            field of <span class="mission__desc mission__desc--secondary">green energy</span>.
        </p>
        <p class="mission__desc"><span class="mission__desc mission__desc--secondary">We are committed to an ecological
                future</span>, creating opportunities for investors who <span
                class="mission__desc mission__desc--secondary">seek to support</span> and <span
                class="mission__desc mission__desc--secondary">engage</span> in these transformations. In our strategy,
            it
            is <span class="mission__desc mission__desc--secondary">important not only to earn</span> but also to reduce
            the
            carbon footprint, building a green economy that <span
                class="mission__desc mission__desc--secondary">benefits
                everyone</span>.</p>
    </div>
</section>

<script>
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
                },
                {
                    root: null,
                    threshold: 0.1,
                }
            );

            observer.observe(missionSection);
        }
    });

</script>