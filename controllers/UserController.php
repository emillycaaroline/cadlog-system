<?php
// Definição da classe UserController, responsável por gerenciar as ações relacionada aos usuários.
class UserController
{
    // Função responsável por cadastrar o usuário.
    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'nome' => $_POST['nome'], 
                'email' => $_POST['email'],
                'senha' => password_hash($_POST['senha'],  PASSWORD_DEFAULT), // = criptografa a senha
                'perfil' => $_POST['perfil']
            ];

            User::create($data);
            header('location: index.php');
        } else {
            // Se a requisição não for POST (por exemplo se for GET), carrega a pagina de resgistro.
            include 'views/register.php';
        }
    }

    public function list(){
        $users = User::all();
        include 'views/list_user.php';
    }

    public function edit($id){
        session_start();

        // permitir que o admin e gestor editem
        if($_SESSION['perfil'] == 'admin' || $_SESSION['perfil'] == 'gestor'){  // || = OU 
            $user = User::find($id);

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $data = [
                    'nome' => $_POST['nome'], 
                    'email' => $_POST['email'],
                    'perfil' => $_POST['perfil']
                ];

                User::update($id, $data);
                header('Location: index.php?action=list');
            } else{
                include 'views/edit_user.php';
            }
        } else{
            echo 'Você não tem permissão para editar usuários';
        }
    }
}
