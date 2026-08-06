<!DOCTYPE html>
<html lang="en">

<?php
include_once __DIR__ . "/../../includes/functions.php";
include_once __DIR__ . "/../../includes/header.php";
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Climaventure</title>
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
            <button id="right" style="position: fixed; right: calc((50vw / 2) / 2);">
                <a href="" style="color:black; text-decoration:none">
                    <span>❯</span>
                </a>
            </button>
            <button id="left" style="position: fixed; left:calc((50vw / 2) / 2);">
                <a href="" style="color:black; text-decoration:none">
                    <span>❮</span>
                </a>
            </button>
        </div>

        <section class="video">
            <div class="video-wrapper">
                <video controls poster="/assets/projects/climaventure/cover-video.png">
                    <source src="/assets/projects/climaventure/video.mp4" type="video/mp4">
                </video>
            </div>


        </section>
        <section class="developement">
            <div class="title-wrapper">
                <h2>Climaventure</h2>
            </div>
            <p>Cette vidéo met en scène un petit personnage 2D évoluant sur une carte interactive. Il explore en temps
                réel les changements climatiques, la <strong>météo</strong>, la <strong>pollution</strong> et les
                événements extrêmes, tout en délivrant
                des conseils santé ludiques et personnalisés.
                Le ton est accessible, <strong>illustré</strong> et interactif pour sensibiliser un large public.</p>

        </section>

        <section class="developement">
            <div class="title-wrapper">
                <h2>styleframe</h2>
            </div>
            <div class="grid-wrapper">
                <img src="/assets/projects/climaventure/vignette/vignette_0.png" alt="">
                <img src="/assets/projects/climaventure/vignette/vignette_1.png" alt="">
                <img src="/assets/projects/climaventure/vignette/vignette_2.png" alt="">
                <img src="/assets/projects/climaventure/vignette/vignette_3.png" alt="">
            </div>
        </section>

    </div>




    <?php include_once __DIR__ . "/../../includes/footer.php"; ?>
    <script src="/assets/js/navbar.js"></script>
    <script src="/assets/js/script.js"></script>
    <script src="/assets/js/projects.js"></script>
</body>

</html>