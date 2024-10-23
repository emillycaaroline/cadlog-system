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
         <link rel="stylesheet" type='text/css' media='screen' href="css/list.css"> <!-- Link para o arquivo CSS -->

         <style>
            body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: rgb(138, 112, 170);
    background: linear-gradient(0deg, rgba(138, 112, 170, 1) 0%, rgba(213, 141, 255, 1) 100%);
    font-family: Arial, sans-serif;
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

/* Estilizando a tabela */
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

/* Ajustando o tamanho das colunas */
.styled-table th,
.styled-table td {
    padding: 12px 15px;
    border-bottom: 1px solid #dddddd;
    text-align: left;
}

.styled-table th {
    min-width: 100px;  /* Define uma largura mínima para garantir alinhamento */
}

.styled-table th:nth-child(1), .styled-table td:nth-child(1) {
    width: 50px; /* Ajusta a largura da coluna ID */
}

.styled-table th:nth-child(2), .styled-table td:nth-child(2) {
    width: 150px; /* Ajusta a largura da coluna Nome */
}

.styled-table th:nth-child(3), .styled-table td:nth-child(3) {
    width: 200px; /* Ajusta a largura da coluna Email */
}

.styled-table th:nth-child(4), .styled-table td:nth-child(4) {
    width: 120px; /* Ajusta a largura da coluna Perfil */
}

.styled-table th:nth-child(5), .styled-table td:nth-child(5) {
    width: 150px; /* Ajusta a largura da coluna Ações */
}

.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #6a1b9a;
}

.styled-table tbody tr:hover {
    background-color: #f1f1f1;
}

/* Estilos para os links de ação (editar, excluir) */
a {
    text-decoration: none;
    color: #6a1b9a;
    font-weight: bold;
}

a:hover {
    color: #4a0072;
    text-decoration: underline;
}

/* Estilos para os botões */
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

/* Botão "Voltar ao Dashboard" */
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

         </style>
     </head>

     <body class=""> <!-- Define a classe com base no perfil do usuário -->
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
                                 <!-- veifica se o perfil é admin ou gestor para poder adicionar ou não o botão editar -->
                                 <?php if ($_SESSION['perfil'] == 'admin' || $_SESSION['perfil'] == 'gestor') : ?>
                                     <a href="">Editar</a>
                                 <?php endif; ?>

                                 <!-- insere o botão de exclusão apenas para o perfil admin -->
                                 <?php if ($_SESSION['perfil'] == 'admin') : ?>
                                     <a href="">Excluir</a>

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

     <p> Erro: Você não tem permissão para vizualizar essa página.</p>

 <?php endif; ?>