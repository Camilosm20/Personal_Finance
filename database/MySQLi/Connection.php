<?php

namespace Database\MySQLi;

class Connection{
    
    private static $instance;
    private $connection;

    private function __construct(){
        $this->make_connection();
    }

    public static function getInstance()
    {
        if (!self::$instance instanceof self) 
            self::$instance = new self();
        
        return self::$instance;

    }

    public static function get_database_instance()
    {
        return $this->connection;
    }

    private function make_connection()
    {
        $server = "localhost";
        $database = "finanzas_personales";
        $username = "root";
        $password = "";

        //Forma orientada a Objetos
        $mysqli = new \mysqli($server, $username, "", $database);

        if ($mysqli->connect_errno) {
            die("Fallo la conexion: {$mysqli->connect_error}");
        };

        //esto nos ayuda a poder usar cualquier caracter en nuestras consultas
        $setnames = $mysqli->prepare("SET NAMES utf8");
        $setnames->execute();
        
        $this->connection = $mysqli;
    }
}
?>