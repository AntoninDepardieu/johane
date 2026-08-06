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
    <link rel="stylesheet" href="<?= asset('/../assets/css/contact.css') ?>">
</head>

<body id="contact">
    <?php include_once __DIR__ . "/../includes/navbar.php"; ?>
    <section class="contact-section">
        <div class="contact-section-wrapper">
            <div class="text-wrapper">
                <h1>Salut !</h1>

                <p class="text">
                    Je suis Johane Mannix, Graphic Designer et Directrice Artistique Junior. Tu as un projet, une
                    identité ou un support à concevoir ? Contacte-moi pour échanger autour d’une direction visuelle
                    sobre, cohérente et adaptée à ton image.
                </p>
            </div>
            <div class="contact-section-wrapper-contact">
                <h1>Contactez moi !</h1>
                <form id="contact-form" method="POST" action="/api/send-email.php">
                    <div class="nom-prenom">
                        <div><label for="name">Nom</label> <input type="text" name="name" id="name" required></div>
                        <div><label for="name">Prénom</label> <input type="text" name="name" id="name" required></div>
                    </div>
                    <div><label for="email">email</label> <input type="text" name="email" id="email" required></div>
                    <div><label for="subject">Objet</label> <input type="text" name="subject" id="subject" required>
                    </div>
                    <div><label for="message">Message</label> <textarea type="text" name="message" id="message"
                            required></textarea></div>

                    <div id="form-message" style="display:none;"></div>

                    <div class="button-wrapper">
                        <button id="send">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <?php include_once __DIR__ . "/../includes/footer.php"; ?>
    <script src="assets/js/navbar.js"></script>
    <script>
        document.querySelector("#contact-form").addEventListener("submit", async function (e) {
            e.preventDefault(); // empêche le rechargement

            const form = e.target;
            const messageBox = document.querySelector("#form-message");
            messageBox.style.display = "none";

            // Envoie les données avec fetch()
            const formData = new FormData(form);
            const response = await fetch(form.action, {
                method: "POST",
                body: formData
            });

            const result = await response.json();

            messageBox.textContent = result.message;
            messageBox.style.display = "block";
            messageBox.style.color = result.success ? "green" : "red";

            if (result.success) {
                form.reset(); // Vide les champs si envoi réussi
            }
        });
    </script>
</body>

</html>