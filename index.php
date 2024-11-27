<?php
// Definir o tempo do cookie (2 minutos)
$tempo_cookie = time() + 120;

// Verificar se o usuário selecionou uma cor
if (isset($_POST['cor'])) {
    setcookie('cor_fundo', $_POST['cor'], $tempo_cookie);
    header("Location: index.php"); // Redireciona para recarregar a página
}

// Verificar se o usuário selecionou um tamanho de fonte
if (isset($_POST['fonte'])) {
    setcookie('tamanho_fonte', $_POST['fonte'], $tempo_cookie);
    header("Location: index.php"); // Redireciona para recarregar a página
}

// Definir cor e tamanho da fonte com base no cookie, se existir
$cor_fundo = isset($_COOKIE['cor_fundo']) ? $_COOKIE['cor_fundo'] : '#ffffff'; // Branco padrão
$tamanho_fonte = isset($_COOKIE['tamanho_fonte']) ? $_COOKIE['tamanho_fonte'] : '16px'; // Padrão 16px
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rock In Rio - Personalize a Página</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: <?php echo $cor_fundo; ?>; font-size: <?php echo $tamanho_fonte; ?>;">
    <header>
        <h1>Bem-vindo ao Rock In Rio!</h1>
        <p>Personalize a página com suas preferências.</p>
    </header>

    <div class="content">
        <!-- Formulário para escolher a cor de fundo -->
        <div class="form-container">
            <h2>Escolha a cor de fundo:</h2>
            <form method="post" action="index.php">
                <select name="cor" id="cor">
                    <option value="#ff0000" <?php echo ($cor_fundo == '#ff0000') ? 'selected' : ''; ?>>Vermelho</option>
                    <option value="#00ff00" <?php echo ($cor_fundo == '#00ff00') ? 'selected' : ''; ?>>Verde</option>
                    <option value="#0000ff" <?php echo ($cor_fundo == '#0000ff') ? 'selected' : ''; ?>>Azul</option>
                    <option value="#ffff00" <?php echo ($cor_fundo == '#ffff00') ? 'selected' : ''; ?>>Amarelo</option>
                    <option value="#ffffff" <?php echo ($cor_fundo == '#ffffff') ? 'selected' : ''; ?>>Branco</option>
                </select>
                <button type="submit">Escolher Cor</button>
            </form>
        </div>

        <!-- Formulário para escolher o tamanho da fonte -->
        <div class="form-container">
            <h2>Escolha o tamanho da fonte:</h2>
            <form method="post" action="index.php">
                <select name="fonte" id="fonte">
                    <option value="12px" <?php echo ($tamanho_fonte == '12px') ? 'selected' : ''; ?>>Pequeno</option>
                    <option value="16px" <?php echo ($tamanho_fonte == '16px') ? 'selected' : ''; ?>>Padrão</option>
                    <option value="20px" <?php echo ($tamanho_fonte == '20px') ? 'selected' : ''; ?>>Grande</option>
                    <option value="24px" <?php echo ($tamanho_fonte == '24px') ? 'selected' : ''; ?>>Muito Grande</option>
                </select>
                <button type="submit">Escolher Tamanho</button>
            </form>
        </div>
    </div>

    
</body>
</html>
