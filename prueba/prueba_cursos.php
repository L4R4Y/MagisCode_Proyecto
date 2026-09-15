<?php

require_once '../clases/conexion.php';

$conexion = new Conexion();

$pdo = $conexion->getConexion();

$sql = "SELECT * FROM curso";

$resultado = $pdo->query($sql);

$cursos = $resultado->fetchAll(PDO::FETCH_ASSOC);

foreach($cursos as $curso){
    echo 'ID: ' . $curso['id_curso'] . '<br>';
    echo 'Título: ' . $curso['titulo_curso'] . '<br>';
    echo '<hr>';
}

