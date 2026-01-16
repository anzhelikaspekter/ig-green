<header class="section header" id="home">
    <div class="header__logo">
        <a href="/" class="header__logo-link">
            <span class="logo-header"></span>
        </a>
    </div>
    <nav class="header__nav" id="nav">
        <?php
        require('templates/components/list.php');
        ?>
        <?php
        require('templates/components/btn-secondary.php');
        ?>
    </nav>
    <div class="header__panel">
        <?php
        require('templates/components/btn-secondary.php');
        ?>
        <?php
        require('templates/components/mobile-nav.php');
        ?>
    </div>
</header>

<script>
    document.querySelectorAll('.btn-menu').forEach(btn => {
        btn.addEventListener('click', e => {
            btn.classList.toggle('active');
        });
    });

    const toggleMenu = document.getElementById("toggleNav");
    const menu = document.getElementById("nav");

    toggleMenu.addEventListener("click", () => {
        menu.classList.toggle("show");
    });
</script>