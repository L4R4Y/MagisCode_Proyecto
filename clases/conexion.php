<?php

class Conexion{

    private string $host = 'localhost';
    private string $usuario = 'root';
    private string $password = '123456789';
    private string $baseDatos = 'magiscode';

    private PDO $conexion;

    public function __construct(){
        $this->conexion = new PDO(
            "mysql:host={$this->host};dbname={$this->baseDatos}; charset=utf8",
            $this->usuario,
            $this->password
        );

        $this->conexion->setAttribute(
            PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION);

    }

    public function getConexion(): PDO{
        return $this->conexion;
    }



}
