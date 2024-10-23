<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" type='text/css' media='screen' href="">

    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: rgb(138,112,170);
            background: linear-gradient(0deg, rgba(138,112,170,1) 0%, rgba(213,141,255,1) 100%);
        }

        div {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            width: 500px;
            max-width: 400px;
            text-align: center;
        }

        /* Estilos para o botão de Gerenciar Usuários */
        .btn-gerenciar {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px 0;
            background-color: #6a1b9a;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-size: 16px;
        }

        .btn-gerenciar:hover {
            background-color: #4a0072;
        }

        /* Estilos para o botão de Logout */
        .btn-logout {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px 0;
            background-color: #e57373;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-size: 16px;
        }

        .btn-logout:hover {
            background-color: #d32f2f;
        }
    </style>

</head>

<body class="<?= $_SESSION['perfil'] ?>"> <!-- Define a classe com base no perfil -->
    <div class="container">
        <h1>Bem-vindo, <?= $_SESSION['perfil'] ?>!</h1>
        <p>Esta é a visão do perfil <?= $_SESSION['perfil'] ?>.</p>

        <?php if($_SESSION['perfil'] == 'admin'): ?>
            <!-- Admin pode gerenciar usuários (editar e excluir) -->
            <a href="index.php?action=list" class="btn-gerenciar">Gerenciar Usuários (Admin)</a>

        <?php elseif($_SESSION['perfil'] == 'gestor'): ?>
            <!-- Gestor pode gerenciar usuários (apenas editar) -->
            <a href="index.php?action=list" class="btn-gerenciar">Gerenciar Usuários (Gestor)</a>
            <p>Área exclusiva do Gestor.</p>

        <?php else: ?>
            <p>Área exclusiva do Colaborador.</p>
        <?php endif; ?>

        <br><br><br><br>
        <!-- Link para logout com estilo diferente -->
        <a href="index.php?action=logout" class="btn-logout">Logout</a>
    </div>
</body>

</html>
