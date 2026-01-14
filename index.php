<?php
require_once 'includes/functions.php';

$info = getPersonalInfo();
$post = getLatestPost();

// Lógica de envio de comentário
$comment_msg = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_comment'])) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $text = htmlspecialchars($_POST['comment_text']);
    $post_id = $_POST['post_id'];

    if (submitComment($post_id, $email, $text)) {
        $comment_msg = "Comentário enviado para autorização!";
    } else {
        $comment_msg = "Erro ao enviar comentário.";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $info['name']; ?> - Home</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container site-layout">
        <!-- Perfil (Lado Esquerdo no desenho) -->
        <aside class="profile-sidebar glass-panel">
            <img src="<?php echo $info['profile_pic'] ?? 'https://via.placeholder.com/180'; ?>" alt="Foto de Perfil"
                class="profile-pic">
            <h2><?php echo $info['name']; ?></h2>
            <p><?php echo $info['title']; ?></p>

            <div class="social-links">
                <a href="<?php echo $info['github_url']; ?>" class="social-btn" title="GitHub"><i
                        class="fab fa-github"></i></a>
                <a href="<?php echo $info['steam_url']; ?>" class="social-btn" title="Steam"><i
                        class="fab fa-steam"></i></a>
                <a href="<?php echo $info['youtube_url']; ?>" class="social-btn" title="YouTube"><i
                        class="fab fa-youtube"></i></a>
            </div>
        </aside>

        <!-- Barra Superior (Busca e Botões) -->
        <header class="top-bar glass-panel">
            <a href="curriculo.php" class="btn-icon" title="Currículo"><i class="fas fa-file-alt"></i></a>

            <form action="" class="search-container">
                <input type="text" class="search-input" placeholder="Pesquisar...">
                <button type="submit" class="btn-icon"><i class="fas fa-search"></i></button>
            </form>

            <a href="posts.php" class="btn-icon" title="Todos os Posts"><i class="fas fa-pen-nib"></i></a>
        </header>

        <!-- Conteúdo Principal (Local do Post no desenho) -->
        <main class="main-content">
            <?php if ($post): ?>
                <article class="post-card glass-panel">
                    <div class="post-meta">
                        <?php echo $post['categoria']; ?> • <?php echo $post['mês']; ?> de <?php echo $post['ano']; ?>
                    </div>
                    <h1 class="post-title"><?php echo $post['nome']; ?></h1>
                    <div class="post-body">
                        <?php echo nl2br($post['content']); ?>
                    </div>

                    <!-- Seção de Comentários -->
                    <section class="comment-section">
                        <h3>Comentários</h3>
                        <?php if ($comment_msg): ?>
                            <p style="color: var(--primary-color); margin: 10px 0;"><?php echo $comment_msg; ?></p>
                        <?php endif; ?>

                        <form action="" method="POST" class="comment-form">
                            <input type="hidden" name="post_id" value="<?php echo $post['id']; ?>">
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Seu e-mail" required>
                            </div>
                            <div class="form-group">
                                <textarea name="comment_text" rows="3" placeholder="Escreva seu comentário..."
                                    required></textarea>
                            </div>
                            <button type="submit" name="submit_comment" class="btn-icon">Enviar Comentário</button>
                        </form>

                        <div class="authorized-comments">
                            <?php
                            $comments = getAuthorizedComments($post['id']);
                            foreach ($comments as $c):
                                ?>
                                <div class="comment-item"
                                    style="margin-top: 15px; border-bottom: 1px solid var(--glass-border); padding-bottom: 10px;">
                                    <strong><?php echo explode('@', $c['user_email'])[0]; ?></strong>
                                    <p><?php echo $c['comment_text']; ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </section>
                </article>
            <?php else: ?>
                <div class="glass-panel" style="padding: 2rem;">Nenhum post encontrado.</div>
            <?php endif; ?>
        </main>

        <footer>
            <p>&copy; 2026 - <?php echo $info['name']; ?>. Todos os direitos reservados.</p>
            <div class="footer-links">
                <a href="terms.php">Termos de Uso</a>
                <a href="privacy.php">Política de Privacidade</a>
            </div>
        </footer>
    </div>
</body>

</html>