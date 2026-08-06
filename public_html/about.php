<!DOCTYPE html>
<html lang="en">
<?php
include_once __DIR__ . "/../includes/functions.php";
include_once __DIR__ . "/../includes/header.php";
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= asset('assets/css/about.css') ?>">
</head>

<body id="about">
    <?php include_once __DIR__ . "/../includes/navbar.php"; ?>
    <section class="about-section">
        <div class="about-section-wrapper">
            <div class="img-wrapper">
                <img src="assets/img/johanne-mannix.png" alt="">
            </div>
            <div class="text">
                <div style="display:flex;flex-direction:column;gap:16px">
                    <h1>Johane Mannix <br>
                        Graphic Designer / Directrice Artistique Junior
                    </h1>
                    <a style="margin-top:0" class="cv-button" href="assets/docs/Mannix-Johane-CV-2026.pdf" download>
                        Télécharger mon CV
                    </a>
                </div>

                <p>
                    Graphiste bilingue franco-anglaise, je conçois des identités visuelles et des supports print et
                    digitaux autour de la typographie, de la mise en page, de l’illustration et du photomontage.
                    <br><br>
                    Formée en graphisme multimédia et en illustration, j’ai travaillé sur des projets freelance mêlant
                    branding, logos, brochures et leaflets, avec une attention portée à la lisibilité, à la cohérence
                    graphique et à l’identité de chaque marque.
                </p>
            </div>
            <div class="row2">
                <div class="text">
                    <p>
                        Expériences
                        <br><br>
                        Sophrodelic <br>
                        MelBell <br>
                    </p>
                </div>

                <div class="text">
                    <p>
                        Compétences
                        <br><br>
                        Branding et identité visuelle <br>
                        Graphisme print et digital <br>
                        Mise en page (InDesign) <br>
                        Illustration vectorielle et digitale <br>
                        Photomontage et retouche photo <br>
                        Typographie et hiérarchie visuelle <br>
                        Photoshop <br>
                        Illustrator <br>
                        Adobe Dimension <br>
                        Microsoft Office <br>
                        Collaboration <br>
                        Gestion du temps <br>
                    </p>
                </div>

                <div class="text">
                    <p>
                        Parcours
                        <br><br>
                        Bachelor Graphiste Multimédia N6 RNCP <br>
                        Bachelor Illustration et Art Digital <br>
                        Atelier préparatoire en arts appliqués <br>
                        Formation de Graphic Design à la School of Visual Arts <br>
                        Baccalauréat International <br>
                        GCSE Oxford Open Learning <br>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <?php include_once __DIR__ . "/../includes/footer.php"; ?>
    <script src="assets/js/navbar.js"></script>
</body>

</html>