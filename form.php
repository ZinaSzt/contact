<?php
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['last_name']) || trim($_POST['last_name']) === '') {
        $errors[] = 'Veuillez saisir votre nom';
    }

    if (!isset($_POST['first_name']) || trim($_POST['first_name']) === '') {
        $errors[] = 'Veuillez saisir votre prénom';
    }

    if (!isset($_POST['user_email']) || trim($_POST['user_email']) === '') {
        $errors[] = 'Veuillez saisir votre adresse email';
    } else {
        $email = $_POST['user_email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Veuillez saisir une adresse email valide';
        }
    }

    if (!isset($_POST['phone_number']) || trim($_POST['phone_number']) === '') {
        $errors[] = 'Veuillez saisir votre numéro de téléphone';
    }

    if (!isset($_POST['subject']) || trim($_POST['subject']) === '') {
        $errors[] = 'Veuillez choisir un sujet';
    }

    if (!isset($_POST['user_message']) || trim($_POST['user_message']) === '') {
        $errors[] = 'Veuillez saisir votre message';
    }

    if (empty($errors)) {
        header('Location: thanks.php');
        exit;
    } else {
        $errors[] = 'Veuillez corriger les erreurs suivantes :';
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de contact</title>
    <link rel="stylesheet" href="./form.css">
</head>
<body>

<form action="thanks.php" method="post">
    <div class= "center">
        <h1> Contact Us</h1>
        <div class= "nom">
            <input type="text" id="nom" name="last_name" required>
            <label for="nom">Nom </label>
        </div>
        <div class= "prenom">
            <input type="text" id="prenom" name="first_name" required>
            <label for="prenom">Prenom</label>
        </div>
        <div class = "phone">
            <input type="text" id="phone" name="phone_number" required>
            <label for="phone">Phone Number</label>
        </div>
        <div class= "courriel">
            <input type="email" id="courriel" name="user_email" required>
            <label for="courriel">Email :</label>
        </div>
        <div class = "select">
            <label for="subject">Subject:</label><br>
            <select id="subject" name="subject" required>
                <option value="" disabled selected>Choisissez un sujet</option>
                <option value="Valorant">Valorant</option>
                <option value="Days Gone">Days Gone</option>
                <option value="Dishonored">Dishonored</option>
                <option value="Elden Ring">Elden Ring</option>
            </select>
        </div>
        <div class= "message">
            <textarea id="message" name="user_message" required></textarea>
            <label for="message">Message</label>
        </div>
        <div class="button">
            <button type="submit">Send</button>
        </div>
   
