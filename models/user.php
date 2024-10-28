<?php
require_once 'models/database.php';

class User
{
    // Função para localizar usuário pelo email
    public static function findByEmail($email){
        $conn = Database::getConnection();    //:: = serve para entrar na classe
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email");  // : no sql é um marcador (almenta segurança)
        $stmt->execute(['email' => $email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    //Função para encontrar usuario pelo ID
    public static function find($id){
        $conn = Database::getConnection();
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Função para criar um novo usuário no banco de dados
    public static function create($data){
        $conn = Database::getConnection();
        $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha, perfil) VALUES (:nome, :email, :senha, :perfil) ");
        $stmt->execute($data);
    }

    public static function all(){
        $conn = Database::getConnection();
        $stmt = $conn->query('SELECT * FROM usuarios');
        return $stmt->fetchALL(PDO::FETCH_ASSOC);
    }

    public static function update($id, $data){
        $conn = Database::getConnection();

        // prepara consulta sql para atualizar os dados do usuário
        $stmt=$conn->prepare('UPDATE usuarios SET nome = :nome, email = :email, perfil = :perfil WHERE id = :id');

        $data['id'] = $id;
        $stmt->execute($data);
    }
}
