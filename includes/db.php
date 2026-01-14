<?php
// C:\Users\MUITA SOMBRA FOFO\Desktop\site\personal-site\includes\db.php

$host = 'localhost';
$db   = 'personal_site';
$user = 'root'; // Altere conforme sua configuração
$pass = '';     // Altere conforme sua configuração
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     // Em produção, não exiba o erro diretamente
     die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}
?>
