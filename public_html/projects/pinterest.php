<!DOCTYPE html>
<html lang="en">

<?php
include_once __DIR__ . "/../../includes/functions.php";
include_once __DIR__ . "/../../includes/header.php";
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pinterest</title>
    <link rel="stylesheet" href="<?= asset('/assets/css/projects.css') ?>">
</head>

<body class="project">
    <?php include_once __DIR__ . "/../../includes/navbar.php"; ?>

    <div class="object-wrapper">

        <div class="overlay-wrapper" style="display:none">
            <div class="layout-wrapper">
                <div class="display">
                    <button id="close"> x </button>
                </div>
                <img src="" alt="">
                <div class="display">
                    <button id="left"> ❮ </button>
                    <p id="number">1/4</p>
                    <button id="right"> ❯ </button>
                </div>
            </div>
        </div>

        <div class="arrows-wrapper">
            <button id="right" style="position: fixed; right: calc(((100vw / 2) / 2) / 2);">
                <a href="" style="text-decoration:none">
                    <span>❯</span>
                </a>
            </button>
            <button id="left" style="position: fixed; left:calc(((100vw / 2) / 2) / 2);">
                <a href="" style="text-decoration:none">
                    <span>❮</span>
                </a>
            </button>
        </div>

        <section class="slider">
            <div class="slider-wrapper">
            </div>



        </section>
        <section class="developement" style="margin-top: 100px;">
            <div class="title-wrapper">
                <h2>pinterest</h2>
            </div>
            <p>
                Création d’une nouvelle identité visuelle pour <strong>Pinterest</strong> dans le cadre
                d’un workshop d’une semaine à <strong>CIFACOM</strong>. Le projet réinterprète l’image
                de la plateforme à travers un système graphique centré sur la découverte et
                l’inspiration, en développant un logo et un langage typographique évolutif,
                capables de refléter une identité créative, vivante et expressive.
            </p>
        </section>

        <section class="developement">
            <div class="title-wrapper">
                <h2>identité visuelle</h2>
            </div>
            <div class="grid-wrapper" id="vignette-iv" style="grid-template-columns: 1fr 1fr;">
                <img src="/assets/projects/pinterest/vignette-iv/vignette_0.png" alt="" style="aspect-ratio:210/297">
                <img src="/assets/projects/pinterest/vignette-iv/vignette_1.png" alt="" style="aspect-ratio:210/297">
            </div>
        </section>


        <section class="developement">
            <div class="title-wrapper">
                <h2>déclinaisons</h2>
            </div>
            <div class="grid-wrapper" id="vignette">
            </div>
        </section>

    </div>

    <?php include_once __DIR__ . "/../../includes/footer.php"; ?>
    <script src="/assets/js/navbar.js"></script>
    <script src="/assets/js/script.js"></script>
    <script src="/assets/js/projects.js"></script>
</body>

</html>