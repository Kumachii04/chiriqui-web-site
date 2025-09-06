<?php
function obtenerLugares($categoria = null)
{
    $db = new Database();
    $conexion = $db->conectar();

    $query = "SELECT * FROM lugares";
    if ($categoria) {
        $query .= " WHERE categoria = '$categoria'";
    }

    $resultado = $conexion->query($query);
    $lugares = [];

    while ($fila = $resultado->fetch_assoc()) {
        $lugares[] = $fila;
    }

    $db->desconectar();
    return $lugares;
}

function obtenerPlatos($distrito = null)
{
    $db = new Database();
    $conexion = $db->conectar();

    $query = "SELECT * FROM platos";
    if ($distrito) {
        $query .= " WHERE distrito_origen = '$distrito'";
    }

    $resultado = $conexion->query($query);
    $platos = [];

    while ($fila = $resultado->fetch_assoc()) {
        $platos[] = $fila;
    }

    $db->desconectar();
    return $platos;
}