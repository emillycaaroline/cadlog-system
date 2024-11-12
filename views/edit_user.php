<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
    <link rel="stylesheet" href="css/edit.css">

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
            background: white;
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
            margin-left: 100px;
            width: 100%;
            padding: 10px;
            background-color: #be7afd;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s, box-shadow 0.3s;
            text-decoration: none;
        }

        /* Mudando a cor do link qnd passar o mouse */
        a:hover {
            background-color: #a564e9;
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.2);
        }

        h2 {
            text-align: center;
            font-size: x-large;
            font-family: Georgia, 'Times New Roman', Times, serif;
            color: #a564e9;
        }
    </style>

</head>

<body class="edit-body">
    <div class="edit-container">
        <h2>Editar Usuário</h2>
        <form method="post" action="index.php?action=edit&id=<?= $user['id']?>" class="edit-form">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="<?= $user['nome']?>" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?= $user['email']?>" required>

            <label for="perfil">Perfil:</label><br>
            <select name="perfil" id="perfil">
                <!-- ?= serve como if e else -->
                <option value="admin"<?= $user['perfil'] == 'admin' ? 'selected' : '' ?> >Admin</option>  
                <option value="gestor" <?= $user['perfil'] == 'gestor' ? 'selected' : '' ?> >Gestor</option>
                <option value="colaborador" <?= $user['perfil'] == 'colaborador' ? 'selected' : '' ?> >Colaborador</option>
            </select><br><br>

            <button type="submit" class="btn">Salvar</button><br><br><br>
        </form>
        <a href="index.php?action=list" class="back-link">Voltar para Lista de Usuários</a>
    </div>
</body>

</html>

