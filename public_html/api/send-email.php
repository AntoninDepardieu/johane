<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

require __DIR__ . "/../../vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->CharSet = 'UTF-8';

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = 'smtp.gmail.com';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = 'depardieuantonin@gmail.com';      // ton email Gmail
$mail->Password = 'ybpa injt fabo kdrt';    // mot de passe d’application

// Expéditeur & destinataire
$mail->setFrom('depardieuantonin@gmail.com', $name);
$mail->addReplyTo($email, $name);
$mail->addAddress('depardieuantonin@gmail.com', 'Antonin');

// Contenu
$mail->Subject = $subject;
$mail->Body = $message;

$mail->Body = "
    <div style='font-family: Arial, sans-serif; color:#333; background:#f9f9f9; padding:20px; border-radius:8px;'>
        
        <h2 style='color:#2C3E50;'>📨 Nouveau message reçu</h2>
        <p><strong>👤 Nom :</strong> {$name}</p>
        <p><strong>📧 Email :</strong> <a href='mailto:{$email}'>{$email}</a></p>
        <p><strong>📝 Sujet :</strong> {$subject}</p>
        <hr style='margin:15px 0; border:none; border-top:1px solid #ddd;'>
        <p style='white-space: pre-line; font-size:16px;'>💬 <strong>Message :</strong><br>{$message}</p>
        <br>
        <p style='font-size:12px; color:#888;'>— Message envoyé automatiquement depuis ton site web.</p>
    </div>
    ";

// Version texte brut (fallback)
$mail->AltBody = "Nouveau message reçu depuis le formulaire :\n\n" .
    "Nom : {$name}\n" .
    "Email : {$email}\n" .
    "Sujet : {$subject}\n" .
    "Message :\n{$message}\n\n" .
    "— Message automatique depuis ton site web.";



$mail->send();

echo json_encode(["success" => true, "message" => "Votre message a été envoyé avec succès !"]);