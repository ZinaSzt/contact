<?php
$prenom = $_POST['first_name'];
$nom = $_POST['last_name'];
$game = $_POST['subject'];
$courriel = $_POST['user_email'];
$phone = $_POST['phone_number'];
$message = $_POST['user_message'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de contact - Merci</title>
    <link rel="stylesheet" href="./form.css">
</head>
<body>
    Merci <?= $prenom ?> <?= $nom ?> de nous avoir contacté à propos de <?= $game ?>.
    <p>Un de nos conseillers vous contactera soit à l’adresse <?= $courriel ?> ou par téléphone au <?= $phone ?> dans les plus brefs délais pour traiter votre demande :</p>
    <p><?= $message ?></p>
</body>
</html>