<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login e Cadastro - Naldo Painéis</title>
    <style>
        /* Reset básico */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: #FF0000;
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 24px;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        main {
            margin-top: 60px; /* Espaço para o cabeçalho fixo */
            display: flex;
            justify-content: center;
            align-items: center;
            flex: 1;
        }

        .container {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 300px;
            text-align: center;
        }

        .form-container {
            display: none;
        }

        .form-container.active {
            display: block;
        }

        button {
            background-color: #FF0000;
            color: white;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: black;
        }

        input {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 5px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .error-message {
            color: red;
            margin: 10px 0;
        }

        footer {
            background-color: #FF0000;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Naldo Painéis</h1>
    </header>
    
    <main>
        <div class="container">
            <button onclick="toggleForm()">Cadastro</button>
    
            <?php
            session_start();
            if (isset($_SESSION['error_message'])) {
                echo '<div class="error-message">' . $_SESSION['error_message'] . '</div>';
                unset($_SESSION['error_message']);
            }
            if (isset($_SESSION['success_message'])) {
                echo '<script>alert("' . $_SESSION['success_message'] . '"); window.location.href = "index.php";</script>';
                unset($_SESSION['success_message']);
            }
            ?>
    
            <div class="form-container" id="login-form">
                <h2>Login</h2>
                <form action="login.php" method="POST">
                    <input type="text" name="cpf_cnpj" placeholder="CPF/CNPJ" required>
                    <input type="password" name="senha" placeholder="Senha" required>
                    <button type="submit">Login</button>
                </form>
            </div>
            <div class="form-container" id="register-form">
                <h2>Cadastro</h2>
                <form action="register.php" method="POST">
                    <input type="text" name="cpf_cnpj" placeholder="CPF/CNPJ" required>
                    <input type="text" name="nome" placeholder="Nome" required>
                    <input type="text" name="sobrenome" placeholder="Sobrenome" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="text" name="telefone" placeholder="Telefone" required>
                    <input type="password" name="senha" placeholder="Senha" required>
                    <button type="submit">Cadastrar</button>
                </form>
            </div>
        </div>
    </main>
    
    <footer>
        <p>&copy; 2024 Naldo Painéis. Todos os direitos reservados.</p>
    </footer>
    
    <script>
        function toggleForm() {
            var loginForm = document.getElementById('login-form');
            var registerForm = document.getElementById('register-form');
            if (loginForm.classList.contains('active')) {
                loginForm.classList.remove('active');
                registerForm.classList.add('active');
                document.querySelector('button').innerText = 'Naldo Login';
            } else {
                loginForm.classList.add('active');
                registerForm.classList.remove('active');
                document.querySelector('button').innerText = 'Cadastro';
            }
        }

        // Initialize with login form active
        document.getElementById('login-form').classList.add('active');
    </script>
</body>
</html>
