<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar-se</title>
    <link rel="stylesheet" href="style.css">

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
        div {
            background: rgb(255, 255, 255);
            background: radial-gradient(circle, rgba(255, 255, 255, 0.6811099439775911) 0%, rgba(255, 255, 255, 0.773546918767507) 100%);
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

        /* Campo de selecionar */
        select {

            padding: 10px;
            border: 1px solid black;
            border-radius: 5px;
            font-size: medium;
            text-align: center;


        }

        /* muda cor qnd clica em select */
        select:focus {
            border-color: #be7afd;
            outline: none;
            box-shadow: 0 0 5px #be7afd;
            /* Adiciona um efeito de sombra roxa ao focar */

        }

        /* Muda borda do input ao apertar */
        input:focus {
            border-color: #be7afd;
            outline: none;
            box-shadow: 0 0 5px #be7afd;
            /* Adiciona um efeito de sombra roxa ao focar */
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
            transition: color 0.3s;
            text-align: center;
        }

        /* Mudando a cor do link qnd passar o mouse */
        a:hover {
            color: black;
        }

        h2 {
            text-align: center;
            font-size: x-large;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
    </style>

</head>

<body>

    <div>
        <h2>Cadastro de Usuário</h2>
        <form action="index.php?action=register" method="post">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required><br>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required><br>

            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" required><br><br>

            <label for="perfil">Perfil:</label><br>
            <select name="perfil" id="perfil">
                <option value="admin">Admin</option>
                <option value="gestor">Gestor</option>
                <option value="colaborador">Colaborador</option>
            </select><br><br>

            <button type="submit">Cadastrar</button>

        </form>

        <a href="index.php?action=login">Voltar ao login</a>
    </div>

</body>

</html>