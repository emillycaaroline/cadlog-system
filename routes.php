<?php

// Inclui arquivos de controlador para lidar com diferentes ações
require 'controllers/AuthController.php'; // Inclui o controlador de autentificação
require 'controllers/UserController.php'; // Inclui o controlador de usuário
require 'controllers/DashboardController.php'; // Inclui o controlador de dashboard

// Criar instancia dos controladores para utilizar seus métodos.
$authController = new AuthController(); // Instancia o controlador de autenticação = para poder usar.
$userController = new UserController();
$dashboardController = new DashboardController();

// Coleta a ação da URL, se não houver definida, usa 'login' por padrão
$action = $_GET['action'] ?? 'login';  // Usa operador de coalescência nula (??) para definir 'login' se 'action' não estiver presente

switch ($action) {
    case 'login':
        $authController->login(); // chama o método login do controlador de autentificação
        break; //interrompe a execução dos próximos
    case 'register':
        $userController->register();
        break;
    default:
        $authController->login();
        break;
}
