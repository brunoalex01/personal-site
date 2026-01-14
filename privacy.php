<?php
// C:\Users\MUITA SOMBRA FOFO\Desktop\site\personal-site\privacy.php
require_once 'includes/functions.php';
$info = getPersonalInfo();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacidade -
        <?php echo $info['name']; ?>
    </title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <header style="margin-bottom: 2rem;">
            <a href="index.php" style="color: var(--primary-color); text-decoration: none;">&larr; Voltar para Home</a>
            <h1 style="margin-top: 1rem;">Política de Privacidade</h1>
        </header>

        <article class="glass-panel" style="padding: 3rem; line-height: 1.8;">
            <h2>Proteção de Dados</h2>
            <p>Valorizamos a sua privacidade. As informações coletadas através do formulário de comentários (e-mail) são
                utilizadas exclusivamente para identificação do autor e moderação.</p>

            <h2 style="margin-top: 2rem;">Cookies</h2>
            <p>Este site pode utilizar cookies básicos para melhorar a sua experiência de navegação.</p>

            <h2 style="margin-top: 2rem;">Compartilhamento</h2>
            <p>Seus dados nunca serão vendidos ou compartilhados com terceiros sem sua permissão explícita.</p>
        </article>

        <footer style="margin-top: 4rem; text-align: center;">
            <p>&copy; 2026 -
                <?php echo $info['name']; ?>
            </p>
        </footer>
    </div>
</body>

</html>