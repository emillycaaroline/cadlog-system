<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Entrar</title>
    <style>
        button {
            background-color: rgb(190, 122, 253);
            border-radius: 5px;
            font-size: medium;
        }

        body {
            text-align: center;

        }

        input {
            border-radius: 5px;
        }
        a{
            color: purple;
        }
    </style>


</head>

<body>
    <!-- O formulário usa o método POST para enviar dados de forma segura -->
    <!-- Os dados serão enviados para 'index.php' com a ação 'login' -->
    <main>
        <form method="post" action="index.php?action=login">
            <label for="email">email</label><br>
            <input type="email" name="email" placeholder="Email" required><br><br>
            <label for="senha">Senha</label><br>
            <input type="password" name="senha" placeholder="Senha" required><br><br>
            <button type="submit">Login</button>
        </form>
        <!-- Define o destino do link e leva à opção de cadastro -->
        <a href="index.php?action=register">Cadastrar-se</a>
    </main>

</body>

</html>