<?php
// C:\Users\MUITA SOMBRA FOFO\Desktop\site\personal-site\includes\functions.php
require_once 'db.php';

function getPersonalInfo() {
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM personal_info LIMIT 1");
    return $stmt->fetch();
}

function getPosts($type_id = null) {
    global $pdo;
    if ($type_id) {
        $stmt = $pdo->prepare("SELECT * FROM posts WHERE type_id = ? ORDER BY created_at DESC");
        $stmt->execute([$type_id]);
    } else {
        $stmt = $pdo->query("SELECT * FROM posts ORDER BY created_at DESC");
    }
    return $stmt->fetchAll();
}

function getLatestPost() {
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM posts ORDER BY created_at DESC LIMIT 1");
    return $stmt->fetch();
}

function submitComment($post_id, $email, $text) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO comments (post_id, user_email, comment_text) VALUES (?, ?, ?)");
    $result = $stmt->execute([$post_id, $email, $text]);
    
    if ($result) {
        // Simulação de envio de e-mail para autorização
        $to = "admin@seusite.com"; // Deve vir de personal_info ou config
        $subject = "Novo comentário para autorizar";
        $message = "E-mail: $email\nComentário: $text\n\nPara autorizar, acesse o painel (a ser implementado).";
        
        // Em um servidor real, use a função mail() ou uma biblioteca como PHPMailer
        // mail($to, $subject, $message);
        return true;
    }
    return false;
}

function getAuthorizedComments($post_id) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM comments WHERE post_id = ? AND is_authorized = 1 ORDER BY created_at ASC");
    $stmt->execute([$post_id]);
    return $stmt->fetchAll();
}
?>
