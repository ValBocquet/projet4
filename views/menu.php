<!-- Left Sidebar -->
<div id="sidebar" class="sidebar">
    <div class="menu-left-part">

        <div class="site-info-holder">
            <h1 class="site-title">Jean Forteroche</h1>
            <p class="site-description">
                Blog destiné à l'auteur du livre Billet simple pour l'Alaska.
            </p>
        </div>
        <nav id="header-main-menu">
            <ul class="main-menu sm sm-clean">
                <li><a href="index.php" class="current">Home</a></li>
                <?php if (!empty($_SESSION['name'])) {
                    ?>
                    <li><a href="index.php?action=administration">Panel</a></li>
                    <li><a href="index.php?action=comments">Les commentaires</a></li>
                    <li><a href="index.php?action=deconnexion">Déconnexion</a></li>

                    <?php
                } else {

                    ?>
                    <li><a href="index.php?action=connexion">Administration</a></li>
                    <?php
                }
                ?>
            </ul>
        </nav>
        <footer>
            <div class="footer-info">
                © 2018 SUPPABLOG HTML TEMPLATE. <br> CRAFTED WITH <i class="fa fa-heart"></i> BY <a
                        href="https://colorlib.com">COLORLIB</a>.
            </div>
        </footer>
    </div>
    <div class="menu-right-part">
        <div class="logo-holder">
            <a href="index.php">
                <img src="public/images/logo.png" alt="Suppablog WP">
            </a>
        </div>
        <div class="toggle-holder">
            <div id="toggle">
                <div class="menu-line"></div>
            </div>
        </div>
        <div class="social-holder">
            <div class="social-list">
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-vimeo"></i></a>
                <a href="#"><i class="fab fa-behance"></i></a>
                <a href="#"><i class="fas fa-rss"></i></a>
            </div>
        </div>
        <div class="fixed scroll-top"><i class="fab fa-caret-square-o-up" aria-hidden="true"></i></div>
    </div>
    <div class="clear"></div>
</div>
