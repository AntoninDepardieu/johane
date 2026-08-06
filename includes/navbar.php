<!-- navbar.php -->

<section class="section1" id="navbar">

    <div id="navbar-row2">
        <div class="icon-div">
            <a class="iconbutton" href="/" style="z-index: index 5;">
                <div id="div-icon-img">
                    <p id="logo-titre" style="
                    font-family: 'AdobeHandwriting-Ernie',sans-serif;
                    color:black;
                    font-size:24px;
                    ">
                        Johane Mannix
                    </p>
                </div>
            </a>
        </div>
        <div class="menu">
            <div class="burger">
                <input id="burger-toggle" type="checkbox">
                <div class="bar-wrapper">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
                <div class="navbar-background">
                </div>
            </div>
            <a href="/" class="<?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>">Projets</a>
            <a href="/about.php" class="<?= basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : '' ?>">À
                propos</a>
            <a href="/contact.php"
                class="<?= basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : '' ?>">Contact</a>
        </div>
    </div>
    <div class="menu burger-ddm">
        <a href="/" class="<?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>">Projets</a>
        <a href="/about.php" class="<?= basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : '' ?>">À propos</a>
        <a href="/contact.php"
            class="<?= basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : '' ?>">Contact</a>
    </div>
</section>