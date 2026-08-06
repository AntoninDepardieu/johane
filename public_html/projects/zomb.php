<!DOCTYPE html>
<html lang="en">

<?php
include_once __DIR__ . "/../../includes/functions.php";
include_once __DIR__ . "/../../includes/header.php";
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zomb'</title>
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

        <section class="video">
            <div class="video-wrapper">
                <video controls poster="/assets/projects/zomb/cover-video.webp">
                    <source src="/assets/projects/zomb/video.mp4" type="video/mp4">
                </video>
            </div>



        </section>
        <section class="developement">
            <div class="title-wrapper">
                <h2>Zomb'</h2>
            </div>
            <p>Film réalisé à deux lors d’un workshop en <strong>stop motion</strong> à l’Atelier de Sèvres, à l’aide de
                <strong>Dragonframe</strong>,
                <strong>After Effects</strong> et <strong>Premiere Pro.</strong>
            </p>

        </section>

        <section class="developement">
            <div class="title-wrapper">
                <h2>styleframes</h2>
            </div>
            <div class="grid-wrapper">
                <img src="/assets/projects/zomb/vignette/vignette_0.webp" alt="">
                <img src="/assets/projects/zomb/vignette/vignette_1.webp" alt="">
                <img src="/assets/projects/zomb/vignette/vignette_2.webp" alt="">
                <img src="/assets/projects/zomb/vignette/vignette_3.webp" alt="">
            </div>
        </section>



        <section class="developement">
            <div class="title-wrapper">
                <h2>storyboard</h2>
            </div>
            <div class="grid-wrapper" style="display:flex">
                <img src="/assets/projects/zomb/storyboard.png" alt="">
            </div>
        </section>

    </div>




    <?php include_once __DIR__ . "/../../includes/footer.php"; ?>
    <script src="/assets/js/navbar.js"></script>
    <script src="/assets/js/script.js"></script>
    <script src="/assets/js/projects.js"></script>
</body>

</html>