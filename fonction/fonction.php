<?php

function generateUUIDv4() {
    // Générer 16 octets (128 bits) de données aléatoires
    $data = random_bytes(16);
    
    // Ajuster certains bits selon la spécification de l'UUIDv4
    $data[6] = chr(ord($data[6]) & 0x0f | 0x40); // Version 4
    $data[8] = chr(ord($data[8]) & 0x3f | 0x80); // Bits 6-7 de l'octet 8 à 10

    // Convertir les données en chaîne hexadécimale et formater comme UUID
    return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
}

// Exemple d'utilisation
$uuid = generateUUIDv4();


function generatePassword($length = 12, $include_uppercase = true, $include_numbers = true, $include_special_chars = true) {
    // Définir les jeux de caractères possibles
    $lowercase_chars = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase_chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $number_chars = '0123456789';
    $special_chars = '!@#$%&?';

    // Commencer avec les lettres minuscules
    $characters = $lowercase_chars;
    
    // Ajouter des lettres majuscules si nécessaire
    if ($include_uppercase) {
        $characters .= $uppercase_chars;
    }
    
    // Ajouter des chiffres si nécessaire
    if ($include_numbers) {
        $characters .= $number_chars;
    }
    
    // Ajouter des caractères spéciaux si nécessaire
    if ($include_special_chars) {
        $characters .= $special_chars;
    }

    // Mélanger les caractères pour plus de sécurité
    $characters = str_shuffle($characters);

    // Générer le mot de passe
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[random_int(0, strlen($characters) - 1)];
    }

    return $password;
}

// Exemple d'utilisation
$password = generatePassword(12, true, true, true);



function getCurrentYear() {
    return date('Y');
}

// Exemple d'utilisation
$currentYear = getCurrentYear();


function getCurrentMonthInFrench() {
    // Définir la locale en français
    setlocale(LC_TIME, 'fr_FR.UTF-8', 'fra');

    // Obtenir le mois actuel en français
    $currentMonth = strftime('%B');

    // Mettre la première lettre en majuscule
    $currentMonth = ucfirst($currentMonth);

    return $currentMonth;
}

// Exemple d'utilisation
$currentMonth = getCurrentMonthInFrench();


function generateActivationCode($length = 6) {
    // Assurez-vous que la longueur est valide
    if ($length <= 0) {
        throw new InvalidArgumentException("La longueur doit être un entier positif.");
    }

    // Générer le code d'activation
    $activationCode = '';
    for ($i = 0; $i < $length; $i++) {
        $activationCode .= rand(0, 9);
    }

    return $activationCode;
}

// Exemple d'utilisation
$activationCode = generateActivationCode();

function getCurrentDateTime() {
    // Définir le fuseau horaire si nécessaire
    date_default_timezone_set('Europe/Paris');

    // Obtenir la date et l'heure actuelles
    $currentDateTime = date('d/m/Y H:i:s');

    // Retourner la date et l'heure actuelles
    return $currentDateTime;
}

// Utiliser la fonction pour afficher la date et l'heure actuelles



?>