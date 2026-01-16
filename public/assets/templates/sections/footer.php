<footer class="section footer">
    <div class="footer__header">
        <div class="footer__logo">
            <a href="/" class="footer__logo-link">
                <span class="logo-footer"></span>
            </a>
        </div>
        <div class="footer__social">
            <?php
            require('templates/components/social.php');
            ?>
        </div>
        <div class="footer__panel">
            <button type="button" class="btn-drop-up"><span class="icon drop-up"></span></button>
        </div>
    </div>
    <div class="footer__nav">
        <?php
        require('templates/components/list.php');
        ?>
    </div>
    <div class="footer__copyright">
        <p class="footer__desc">IG Launc, LLC. All rights reserved.</p>
    </div>
</footer>