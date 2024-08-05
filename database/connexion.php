<?php
// Configuration des paramètres de connexion
$host = 'localhost';
$db = 'projet_mdhat';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

// DSN (Data Source Name) pour la connexion PDO
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// Options de PDO
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    // Création d'une instance PDO
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    // Gestion des erreurs de connexion
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>
