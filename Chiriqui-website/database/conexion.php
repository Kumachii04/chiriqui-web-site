<?php
require_once '../config/database.php';

class Database
{
    private $conexion;

    public function conectar()
    {
        $this->conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if ($this->conexion->connect_error) {
            die("Error de conexión: " . $this->conexion->connect_error);
        }

        $this->conexion->set_charset("utf8");
        return $this->conexion;
    }

    public function desconectar()
    {
        $this->conexion->close();
    }
}