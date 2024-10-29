<?php
session_start();

if (isset($_SESSION['perfil'])) :
?>
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista de Usuários</title>
        <link rel="stylesheet" type='text/css' media='screen' href="css/list.css">

        <style>
            body {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background: rgb(138, 112, 170);
                background: linear-gradient(0deg, rgba(138, 112, 170, 1) 0%, rgba(213, 141, 255, 1) 100%);
                font-family: Arial, sans-serif;
                margin: 0;
            }

            .container {
                background-color: #fff;
                padding: 40px;
                border-radius: 10px;
                box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
                width: 100%;
                max-width: 900px;
                text-align: center;
            }

            h2 {
                margin-bottom: 20px;
            }

            .styled-table {
                width: 100%;
                border-collapse: collapse;
                margin: 25px 0;
                font-size: 16px;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
                text-align: left;
            }

            .styled-table thead tr {
                background-color: #6a1b9a;
                color: #ffffff;
                text-align: left;
                font-weight: bold;
            }

            .styled-table th,
            .styled-table td {
                padding: 12px 15px;
                border-bottom: 1px solid #dddddd;
                text-align: left;
            }

            .btn {
                display: inline-block;
                padding: 10px 20px;
                margin-top: 20px;
                background-color: #6a1b9a;
                color: white;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                text-decoration: none;
                font-size: 16px;
            }

            .btn:hover {
                background-color: #4a0072;
            }

            .btn-dashboard {
                background-color: #6a1b9a;
                color: white;
                padding: 10px 15px;
                border-radius: 5px;
                margin-top: 15px;
                text-decoration: none;
                font-weight: bold;
            }

            .btn-dashboard:hover {
                background-color: #4a0072;
            }

            a{
                
                color: white;
                padding: 10px 15px;
                border-radius: 20px;
                margin-top: 15px;
                text-decoration: none;
                font-weight: bold;
            }

        </style>
    </head>

    <body class="">
        <div class="container">
            <h2>Lista de Usuários</h2>
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Perfil</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user) : ?>
                        <tr>
                            <td><?= $user['id'] ?></td>
                            <td><?= $user['nome'] ?></td>
                            <td><?= $user['email'] ?></td>
                            <td><?= $user['perfil'] ?></td>
                            <td>
                                <?php if ($_SESSION['perfil'] == 'admin' || $_SESSION['perfil'] == 'gestor') : ?>
                                    <a style="background-color: #4d3153;" href="index.php?edit&id=<?= $user['id'] ?>">Editar</a>
                                <?php endif; ?>

                                <?php if ($_SESSION['perfil'] == 'admin') : ?>
                                    <a style="background-color: #df5858;" href="">Excluir</a>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <a href="index.php?action=dashboard" class="btn">Voltar ao Dashboard</a>
        </div>
    </body>

    </html>

<?php else : ?>
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Acesso Negado</title>
        <style>
            body {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background: rgb(138, 112, 170);
                background: linear-gradient(0deg, rgba(138, 112, 170, 1) 0%, rgba(213, 141, 255, 1) 100%);
                font-family: Arial, sans-serif;
                margin: 0;
            }

            .error-container {
                background-color: #fff;
                padding: 40px;
                border-radius: 10px;
                box-shadow: 0px 4px 8px red;
                text-align: center;
                max-width: 500px;
            }

            h1 {
                color: #e74c3c;
                font-size: 2.5rem;
                margin-bottom: 20px;
            }

            p {
                font-size: 1.2rem;
                color: #333;
                margin-bottom: 30px;
            }

            .btn {
                background-color: #e74c3c;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                text-decoration: none;
                font-size: 1rem;
                transition: background-color 0.3s ease;
            }

            .btn:hover {
                background-color: #c0392b;
            }
        </style>
    </head>

    <body>
        <div class="error-container">

            <p>Você não tem permissão para visualizar essa página.</p>
            <a href="index.php?action=dashboard" class="btn">Voltar ao Dashboard</a>
        </div>
    </body>

    </html>
<?php endif; ?>