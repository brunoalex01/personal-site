<?php
// C:\Users\MUITA SOMBRA FOFO\Desktop\site\personal-site\terms.php
require_once 'includes/functions.php';
$info = getPersonalInfo();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Termos de Uso -
        <?php echo $info['name']; ?>
    </title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <header style="margin-bottom: 2rem;">
            <a href="index.php" style="color: var(--primary-color); text-decoration: none;">&larr; Voltar para Home</a>
            <h1 style="margin-top: 1rem;">Termos de Uso</h1>
        </header>

        <article class="glass-panel" style="padding: 3rem; line-height: 1.8;">
            <h2>1. Aceitação dos Termos</h2>
            <p>Ao acessar este site, você concorda em cumprir estes termos de serviço, todas as leis e regulamentos
                aplicáveis.</p>

            <h2 style="margin-top: 2rem;">2. Uso de Conteúdo</h2>
            <p>O conteúdo postado neste site é para fins informativos e pessoais. É proibida a reprodução sem
                autorização prévia.</p>

            <h2 style="margin-top: 2rem;">3. Comentários</h2>
            <p>Reservamo-nos o direito de moderar e remover comentários que sejam considerados ofensivos ou inadequados.
            </p>
        </article>

        <footer style="margin-top: 4rem; text-align: center;">
            <p>&copy; 2026 -
                <?php echo $info['name']; ?>
            </p>
        </footer>
    </div>
</body>

</html>