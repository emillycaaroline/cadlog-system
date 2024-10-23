<?php
// Requer arquivo 'user.php' que contem o model user com as funções para manipulação de dados de usuário.
require_once 'models/user.php';

class AuthController
{
    public function login()
    {
        $error = ''; // Variável para armazenar o erro

        // Verifica se a requisição HTTP é do tipo POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $user = User::findByEmail($email);

            if ($user && password_verify($senha, $user['senha'])) {
                session_start();

                // Armazena o ID e perfil do usuário na sessão
                $_SESSION['usuario_id'] = $user['id'];
                $_SESSION['perfil'] = $user['perfil'];

                header('location: index.php?action=dashboard');
                exit();
            } else {
                $error = "Email ou senha incorreto.";
            }
        }

        // Inclui a página de login com a variável de erro
        include 'views/login.php';
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header('Location: index.php');
    }
}
