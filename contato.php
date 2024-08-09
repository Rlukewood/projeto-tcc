<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

// Dados do usuário
$nome = isset($_SESSION['user_nome']) ? $_SESSION['user_nome'] : 'Usuário';
$email = isset($_SESSION['user_email']) ? $_SESSION['user_email'] : 'email@exemplo.com';
$telefone = isset($_SESSION['user_telefone']) ? $_SESSION['user_telefone'] : '0000-0000';

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Naldo Painéis</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            color: #333;
        }
        header {
            background-color: #ff0000;
            color: #fff;
            padding: 20px;
            text-align: left;
            font-weight: bold;
            font-size: 24px;
        }
        h1 {
            text-align: center;
            margin-top: 50px;
        }
        p {
            text-align: center;
            font-size: 18px;
        }
        button {
            display: block;
            margin: 30px auto;
            padding: 10px 20px;
            font-weight: bold;
            background-color: #ff0000;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        button:hover {
            background-color: #cc0000;
        }
        #orcamentoCard {
            display: none;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #ffffff;
            max-width: 400px;
            text-align: center;
        }
        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
            padding: 10px;
            background-color: #000;
            color: #fff;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <header>
        Naldo Painéis
    </header>

    <h1>Bem-vindo, <?php echo htmlspecialchars($nome); ?>!</h1>
    <p>Email: <?php echo htmlspecialchars($email); ?></p>
    <p>Telefone: <?php echo htmlspecialchars($telefone); ?></p>

    <button onclick="document.getElementById('orcamentoCard').style.display='block'">
        Solicitar Orçamento
    </button>

    <div id="orcamentoCard">
        <p><strong>Escolha uma opção:</strong></p>
        <p><a href="tel:+5545998408629">Ligar para +55 (45) 99840-8629</a></p>
        <p><a href="mailto:matheusdahmer22@gmail.com">Enviar email para matheusdahmer22@gmail.com</a></p>
    </div>

    <footer>
        Contato e Localização: Rua Cristóvão Colombo, 1097 - Pioneiros Catarinenses, Cascavel - PR, 85805-510
    </footer>
</body>
</html>
