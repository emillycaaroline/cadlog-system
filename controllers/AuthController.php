<?php
// Requer arquivo 'user.php' que contem o model user com as funções para manupulação de dados de usuário.
require_once 'models/user.php';

class  AuthController
{

    // Cria função responsável pelo processo de login
    public function login()
    {
        // Verifica se a requisisção HTTP é do tipo POST, ou seja, se o formulário foi enviado
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $user = User::findByEmail($email);

            if($user && password_verify($senha, $user['senha'])){ //Verifica se a senha corresponde a um hash
                session_start(); //  metodo PHP que inicia uma sessão

                //Armazena na sessão o ID do usuário e seu perfil
                $_SESSION['usuario_id'] = $user['id'];
                $_SESSION['perfil']     = $user['perfil'];

                header('location: index.php?action=dashboard');

            }else{
                echo "email ou senha incorreto";
            }
        }else{
            // Se a requisição não for POST (por exemplo GET), carrega a página de registro
            include 'views/login.php';
        }
    }
}
?>