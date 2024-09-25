<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar-se</title>
    <link rel="stylesheet" href="style.css">

    <style>
        button {
            background: rgb(40, 22, 62);
            background: linear-gradient(0deg, rgba(40, 22, 62, 1) 0%, rgba(199, 126, 241, 1) 100%);
            border-radius: 5px;
            font-size: large;
            color: white;
        }

        body {
            text-align: center;
            margin-top: 150px;
        }

        input {
            border-radius: 5px;

        }

        a {
            color: purple;
        }
  
        select {
            border-radius: 5px;
        }

        div {
            border: solid 5px;
            border-radius: 30px;
            margin-left: 300px;
            margin-right: 300px;
        }
    </style>

</head>

<body>

    <div>
        <h2>Cadastro de Usuário</h2>
        <form action="" method="post">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" required><br>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" required><br>

            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" required><br><br>

            <label for="perfil">Perfil:</label>
            <select name="perfil" id="perfil">
                <option value="admin">Admin</option>
                <option value="gestor">Gestor</option>
                <option value="colaborador">Colaborador</option>
            </select><br><br>

            <button type="submit">Cadastrar</button>

        </form>

        <a href="">Voltar ao login</a>
    </div>

</body>

</html>