<!DOCTYPE html>
<html lang="en">

<?php
include_once __DIR__ . "/../../includes/functions.php";
include_once __DIR__ . "/../../includes/header.php";
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nzy</title>
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
                <h2>nzy</h2>
            </div>
            <p>
                Création de l’identité visuelle d’une entreprise fictive dans le cadre du projet
                de fin de Bachelor à <strong>CIFACOM</strong>. Le projet présente <strong>NZY</strong>,
                une solution de recyclage du plastique PET par l’action d’enzymes naturelles,
                à travers un univers graphique inspiré par la science, la régénération et
                l’économie circulaire.
            </p>
            <a href="https://drive.google.com/drive/folders/1J3IcDi5zw7ggPREZisA7OmuWKAX8cxd7?usp=drive_link" style="text-decoration:underline 1px black" target="_blank">Voir le dossier marketing</a>
        </section>

        <section class="developement">
            <div class="title-wrapper">
                <h2>identité visuelle</h2>
            </div>
            <div class="grid-wrapper" id="vignette-iv">
                <img src="/assets/projects/nzy/vignette-iv/vignette_0.png" alt="">
                <img src="/assets/projects/nzy/vignette-iv/vignette_1.png" alt="">
                <img src="/assets/projects/nzy/vignette-iv/vignette_2.png" alt="">
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