<!DOCTYPE html>
<html lang="en">

<?php
include_once __DIR__ . "/../../includes/functions.php";
include_once __DIR__ . "/../../includes/header.php";
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>les-fruits-magiques</title>
    <link rel="stylesheet" href="<?= asset('/assets/css/projects.css') ?>">
    <style>
        @media (max-width:767px) {
            img#pencarte {
                display: none;
            }
        }
    </style>
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
        <section class="developement">
            <img id="pencarte" src="/assets/projects/les-fruits-magiques/vignette/vignette_0.png"
                style="position:absolute; right:0; top:100px; width:25%">
            <div class="grid-wrapper" style="grid-template-columns: 1fr; margin-top: 100px;">
                <img src="/assets/projects/les-fruits-magiques/cover.gif" alt="">
            </div>
        </section>
        <section class="developement">
            <div class="title-wrapper">
                <h2>Les fruits magiques</h2>
            </div>
            <p>
                Réalisation d’un storyboard pour un court-métrage d’animation fictif dans le
                cadre d’un projet à <strong>CIFACOM</strong>. <strong>Les Fruits Magiques</strong> revisite avec
                humour les codes du laboratoire scientifique à travers un univers cartoon
                coloré, où une expérience interdite entraîne un jeune stagiaire dans une
                transformation aussi absurde que monstrueuse.
            </p>

        </section>

        <section class="developement">
            <div class="title-wrapper">
                <h2>galerie</h2>
            </div>
            <div class="grid-wrapper">
                <img src="/assets/projects/les-fruits-magiques/vignette/vignette_1.png" alt="">
                <img src="/assets/projects/les-fruits-magiques/vignette/vignette_2.png" alt="">
                <img src="/assets/projects/les-fruits-magiques/vignette/vignette_3.png" alt="">
                <img src="/assets/projects/les-fruits-magiques/vignette/vignette_4.png" alt="">
                <img src="/assets/projects/les-fruits-magiques/vignette/vignette_5.png" alt="">
                <img src="/assets/projects/les-fruits-magiques/vignette/vignette_6.png" alt="">
                <img src="/assets/projects/les-fruits-magiques/vignette/vignette_7.png" alt="">
                <img src="/assets/projects/les-fruits-magiques/vignette/vignette_8.png" alt="">
                <img src="/assets/projects/les-fruits-magiques/vignette/vignette_9.png" alt="">
                <img src="/assets/projects/les-fruits-magiques/vignette/vignette_10.png" alt="">
                <img src="/assets/projects/les-fruits-magiques/vignette/vignette_11.png" alt="">
                <img src="/assets/projects/les-fruits-magiques/vignette/vignette_12.png" alt="">
                <img src="/assets/projects/les-fruits-magiques/vignette/vignette_13.png" alt="">
                <img src="/assets/projects/les-fruits-magiques/vignette/vignette_14.png" alt="">
                <img src="/assets/projects/les-fruits-magiques/vignette/vignette_15.png" alt="">
                <img src="/assets/projects/les-fruits-magiques/vignette/vignette_16.png" alt="">
                <img src="/assets/projects/les-fruits-magiques/vignette/vignette_17.png" alt="">
                <img src="/assets/projects/les-fruits-magiques/vignette/vignette_18.png" alt="">
                <img src="/assets/projects/les-fruits-magiques/vignette/vignette_19.png" alt="">
                <img src="/assets/projects/les-fruits-magiques/vignette/vignette_20.png" alt="">
                <img src="/assets/projects/les-fruits-magiques/vignette/vignette_21.png" alt="">
                <img src="/assets/projects/les-fruits-magiques/vignette/vignette_22.png" alt="">
                <img src="/assets/projects/les-fruits-magiques/vignette/vignette_23.png" alt="">
                <img src="/assets/projects/les-fruits-magiques/vignette/vignette_24.png" alt="">
                <img src="/assets/projects/les-fruits-magiques/vignette/vignette_24.png" alt="">
                <img src="/assets/projects/les-fruits-magiques/vignette/vignette_25.png" alt="">
                <img src="/assets/projects/les-fruits-magiques/vignette/vignette_26.png" alt="">
                <img src="/assets/projects/les-fruits-magiques/vignette/vignette_27.png" alt="">
            </div>
        </section>

    </div>




    <?php include_once __DIR__ . "/../../includes/footer.php"; ?>
    <script src="/assets/js/navbar.js"></script>
    <script src="/assets/js/script.js"></script>
    <script src="/assets/js/projects.js"></script>
</body>

</html>