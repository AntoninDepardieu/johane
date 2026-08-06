<!DOCTYPE html>
<html lang="en">

<?php
include_once __DIR__ . "/../../includes/functions.php";
include_once __DIR__ . "/../../includes/header.php";
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>galadrim</title>
    <link rel="stylesheet" href="<?= asset('/assets/css/projects.css') ?>">
    <style>
        html,
        body {
            font-family: "Kumbh-sans", sans-serif;
        }
    </style>
</head>

<div id="splashscreen">
    <img src="/assets/icons/logo.gif" alt="">
</div>

<body class="project galadrim" style="background-color:#F9FBFF;">
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

        <div class="arrows-wrapper" style="display: none;">
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
            <div class="video-wrapper presentation-1" style="aspect-ratio: 9/16; width:46%; margin-inline:auto">
                <video controls poster="/assets/projects/galadrim/cover-video.png" style="
                display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;">
                    <source src="/assets/projects/galadrim/video.mp4" type="video/mp4">
                </video>
            </div>
        </section>
        <section class="developement">
            <div class="title-wrapper">
                <h2>Bienvenue</h2>
            </div>
            <p>
                En complément de ma candidature, j'ai souhaité prendre les devants en imaginant quelques pistes
                d'amélioration pour les supports de communication de <strong>Galadrim</strong>. Cette <strong>landing
                    page</strong> a été conçue pour vous présenter ma démarche et vous témoigner de mes compétences en
                <strong>direction artistique</strong>, <strong>motion design</strong> et <strong>storytelling</strong>.
                Vous y découvrirez la <strong>vidéo de présentation</strong> de mon parcours et de mes motivations que
                j'ai retravaillée, une
                proposition de <strong>miniature YouTube</strong>, ainsi qu'une <strong>refonte en motion
                    design</strong> d'un réel Instagram existant. Mon objectif est de vous montrer ma façon de concevoir
                des contenus créatifs, cohérents et pensés pour renforcer l'impact d'une marque.
            </p>

        </section>

        <section class="developement">
            <div class="title-wrapper">
                <h2>Miniature youtube</h2>
                <p>
                    Pour la réalisation de miniature, j'ai utilisé <strong>chatgpt</strong> et <strong>Adobe
                        Photoshop</strong>.

                </p>
            </div>
            <div class="grid-wrapper" style="grid-template-columns: 1fr;">
                <p>avant</p>
                <img src="/assets/projects/galadrim/vignette/vignette_0.png" alt="">
                <p>après</p>
                <img src="/assets/projects/galadrim/vignette/vignette_1.png" alt="" style="object-fit: cover;">
                <img src="/assets/projects/galadrim/vignette/vignette_2.png" alt="" style="object-fit: cover;">
            </div>
        </section>
        <section class="developement">
            <div class="title-wrapper">
                <h2>reel instagram</h2>
            </div>
            <p>
                Pour la réalisation de cette vidéo, j'ai retiré les sous-titres à l'aide de l'ia de modification vidéo
                <strong>Runway Aleph</strong>, j'ai ensuite designé les assets sur <strong>Adobe Illustrator</strong> et
                les ai animé sur <strong>Adobe After Effect</strong>, généré la musique avec <strong>Suno Ai</strong>,
                et enfin fait les sous-titres ainsi que la composition sur <strong>Adobe Premiere Pro</strong>, pour la
                miniature, j'ai utilisé <strong>chatgpt</strong> et <strong>Adobe Photoshop</strong>.

            </p>
            <div class="wrapper" style="display:grid; grid-template-columns: 1fr 1fr; gap:16px">
                <div class="video-wrapper" style="aspect-ratio:unset; display: grid; gap:12px; height:fit-content">
                    <p>avant</p>
                    <video controls style="aspect-ratio:9/16">
                        <source src="/assets/projects/galadrim/reel-avant.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="video-wrapper" style="aspect-ratio:unset; display: grid; gap:12px; height:fit-content">
                    <p>après</p>
                    <video controls poster="/assets/projects/galadrim/cover-reel.png" style="aspect-ratio:9/16">
                        <source src="/assets/projects/galadrim/reel.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="grid-wrapper" style="grid-template-columns : 1fr; grid-column: span 2">
                    <img src="/assets/projects/galadrim/cover-reel.png" alt=""
                        style="object-fit: cover; aspect-ratio:9/16; width:50%; justify-self:center">
                </div>
            </div>
        </section>
        <section class="video" style="display: flex; flex-direction: column; gap:16px; margin-block: 0px 100px">
            <h2>Vidéo de présentation — Version 2</h2>
            <div class="video-wrapper">
                <video controls poster="/assets/projects/galadrim/cover-video.png">
                    <source src="/assets/projects/galadrim/video-2.mp4" type="video/mp4">
                </video>
            </div>
        </section>


    </div>

    <div class='wave' style="position:fixed; top:50%; transform:translateY(-50%); width:100%; z-index: -10;">
        <img src="/assets/projects/galadrim/wave.svg" alt="" style="width: 100%;">
    </div>



    <?php include_once __DIR__ . "/../../includes/footer.php"; ?>
    <script src="/assets/js/navbar.js"></script>
    <script src="/assets/js/script.js"></script>
    <script src="/assets/js/projects.js"></script>
    <script src="/assets/js/splash-screen.js"></script>
</body>

</html>