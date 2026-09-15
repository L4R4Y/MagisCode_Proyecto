<?php

require_once '../clases/conexion.php';

$conexion = new Conexion();

$pdo = $conexion->getConexion();

$sql = "DELETE FROM curso
        WHERE id_curso = :id";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    ':id' => 20
]);

echo 'Curso eliminado correctamente';
