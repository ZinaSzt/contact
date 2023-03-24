<?php
$nom = $_POST['last_name'];
$prenom = $_POST['first_name'];
$phone = $_POST['phone_number'];
$courriel = $_POST['user_email'];
$game = $_POST['subject'];
$message = $_POST['user_message'];

echo "Merci $prenom $nom de nous avoir contacté à propos de $game.

Un de nos conseillers vous contactera soit à l’adresse $courriel ou par téléphone au $phone dans les plus brefs délais pour traiter votre demande : 

$message";
?>