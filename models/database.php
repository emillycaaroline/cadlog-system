<?php
class Database
{
    // Ultiliza padrão singleton, cujo o objetivo é garantir que apenas uma unica instancia de classe seja criada durante a execução do programa e que essa instancia seja ultilizada sempre que necessário
    private static $instance = null;

    //Método público que retorna a conexão com DB
    public static function getConnection()
    {
        if (!self::$instance) {  // ! = "Não" ou seja se não exite a instancia de conexão vamos criar ela
            $host = 'localhost';
            $db = 'sistema_usuarios';
            $user = 'root';
            $password = '';

            // A conexão usa o driver mysql (mysql:) e as informações de host e DB
            self::$instance = new PDO("mysql:host=$host;dbname=$db", $user, $password);

            //Define o modo de erro para exceções, facilitando a depuração e tratamento do erro
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$instance;
    }
}
