<?php

require_once '../clases/conexion.php';

$conexion = new Conexion();

$pdo = $conexion->getConexion();

$sql = "UPDATE curso
        SET titulo_curso = :titulo,
            descripcion_curso = :descripcion
        WHERE id_curso = :id";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    ':titulo' => 'Curso de PHP y POO',
    ':descripcion' => 'Curso actualizado mediante PDO',
    ':id' => 20
]);

echo 'curso actualizado correctamente';
