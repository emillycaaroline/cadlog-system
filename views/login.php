<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Entrar</title>

    <style>
        /* corpo da pagina */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: rgb(174, 68, 217);
            background: linear-gradient(0deg, rgba(174, 68, 217, 1) 0%, rgba(233, 177, 255, 1) 100%);
        }

        /* formulário */
        main {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            width: 500px;
            max-width: 400px;
        }

        /* Titulos */
        label {
            font-size: large;
        }

        /* Inputs (Campos para escrever) */
        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid black;
            border-radius: 5px;
            font-size: medium;
        }

        /* Muda borda do input ao apertar */
        input:focus {
            border-color: #be7afd;
            outline: none;
        }

        /* botão */
        button {
            width: 100%;
            padding: 10px;
            background-color: #be7afd;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s, box-shadow 0.3s;
            /* Transição de cor e a sombra */
        }

        /* Efeito sombra qnd passar o mouse no botão */
        button:hover {
            background-color: #a564e9;
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.2);
            /* Sombra mais forte ao passar o mouse */
        }

        /* link de cadastro */
        a {
            display: block;
            margin-top: 20px;
            color: #a564e9;
            transition: color 0.5s;
            text-align: center;
        }

        /* Mudando a cor do link qnd passar o mouse */
        a:hover {
            color: black;
        }
    </style>


</head>

<body>
    <!-- O formulário usa o método POST para enviar dados de forma segura -->
    <!-- Os dados serão enviados para 'index.php' com a ação 'login' -->
    <main>
        <form method="post" action="index.php?action=login">
            <label for="email">email:</label><br><br>
            <input type="email" name="email" placeholder="Email" required><br><br>
            <label for="senha">Senha:</label><br><br>
            <input type="password" name="senha" placeholder="Senha" required><br><br>
            <button type="submit">Login</button>
        </form>
        <!-- Define o destino do link e leva à opção de cadastro -->
        <a href="index.php?action=register">Cadastrar-se</a>
    </main>

</body>

</html>