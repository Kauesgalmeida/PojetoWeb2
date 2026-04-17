<?php
$nome = "";
$email = "";
$telefone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"] ?? "";
    $email = $_POST["email"] ?? "";
    $telefone = $_POST["telefone"] ?? "";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Web II</title>
    <link rel="stylesheet" href="style.css">
    <script src="app.js"></script>
</head>
<body>
    <div class="contain">
        <div class="form">
            <form id="cadastroForm" method="POST" action="">
                <h1>Cadastro de Usuário</h1>
                <p>Preencha os dados abaixo.</p>

                <label for="nome">Nome:</label><br>
                <input type="text" id="nome" name="nome" required><br><br>

                <label for="email">E-mail:</label><br>
                <input type="email" id="email" name="email" required><br><br>

                <label for="telefone">Telefone:</label><br>
                <input type="text" id="telefone" name="telefone" pattern="^\([1-9]{2}\)[0-9]{4}\-[0-9]{4}$" required><br><br>

                <button type="submit">Cadastrar</button>

                <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
                    <h2>Dados recebidos pelo servidor</h2>
                    <p><strong>Nome:</strong> <?php echo htmlspecialchars($nome); ?></p>
                    <p><strong>E-mail:</strong> <?php echo htmlspecialchars($email); ?></p>
                    <p><strong>Telefone:</strong> <?php echo htmlspecialchars($telefone); ?></p>
                <?php endif; ?>
            </form>
        </div>
    </div>


</body>
</html>