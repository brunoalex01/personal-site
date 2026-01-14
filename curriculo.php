<?php
// C:\Users\MUITA SOMBRA FOFO\Desktop\site\personal-site\curriculo.php
require_once 'includes/functions.php';
$info = getPersonalInfo();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículo -
        <?php echo $info['name']; ?>
    </title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <header style="margin-bottom: 2rem; display: flex; align-items: center; gap: 20px;">
            <a href="index.php" class="btn-icon"><i class="fas fa-arrow-left"></i> Voltar</a>
            <h1>Meu Currículo</h1>
        </header>

        <div class="resume-grid">
            <section class="resume-section glass-panel">
                <h2>Dados Pessoais</h2>
                <p><strong>Nome:</strong>
                    <?php echo $info['name']; ?>
                </p>
                <p><strong>Título:</strong>
                    <?php echo $info['title']; ?>
                </p>
                <p><strong>E-mail:</strong>
                    <?php echo $info['email']; ?>
                </p>
                <p><strong>Bio:</strong>
                    <?php echo $info['bio']; ?>
                </p>
            </section>

            <section class="resume-section glass-panel">
                <h2>Experiência Profissional</h2>
                <div class="experience-item" style="margin-bottom: 1.5rem;">
                    <h3>Desenvolvedor PHP Senior</h3>
                    <p><em>Empresa Exemplo | 2020 - Presente</em></p>
                    <p>Desenvolvimento de sistemas robustos, APIs e manutenção de legados.</p>
                </div>
            </section>

            <section class="resume-section glass-panel">
                <h2>Educação</h2>
                <div class="edu-item">
                    <h3>Ciência da Computação</h3>
                    <p><em>Universidade Federal | 2016 - 2020</em></p>
                </div>
            </section>

            <section class="resume-section glass-panel">
                <h2>Habilidades</h2>
                <div style="display: flex; gap: 10px; flex-wrap: wrap;">
                    <span style="background: var(--primary-color); padding: 5px 15px; border-radius: 20px;">PHP</span>
                    <span style="background: var(--primary-color); padding: 5px 15px; border-radius: 20px;">MySQL</span>
                    <span
                        style="background: var(--primary-color); padding: 5px 15px; border-radius: 20px;">JavaScript</span>
                    <span style="background: var(--primary-color); padding: 5px 15px; border-radius: 20px;">CSS3</span>
                </div>
            </section>
        </div>

        <footer
            style="margin-top: 4rem; text-align: center; border-top: 1px solid var(--glass-border); padding-top: 2rem;">
            <p>&copy; 2026 -
                <?php echo $info['name']; ?>. Todos os direitos reservados.
            </p>
            <div class="footer-links">
                <a href="terms.php">Termos de Uso</a>
                <a href="privacy.php">Política de Privacidade</a>
            </div>
        </footer>
    </div>
</body>

</html>