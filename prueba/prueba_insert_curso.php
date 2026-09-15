<?php

require_once '../clases/conexion.php';

$conexion = new Conexion();

$pdo = $conexion->getConexion();

$sql = "INSERT INTO curso (titulo_curso, descripcion_curso, ruta_imagen, estado_curso, id_usuario_c)
        VALUES (:titulo, :descripcion, :ruta, :estado, :idprofesor)";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    ':titulo' => 'Curso de prueba PDO',
    ':descripcion' => 'Curso creado desde PHP usando PDO',
    ':ruta' => 'img/php_prueba_php.jpg',
    ':estado' => 'Activo',
    ':idprofesor' => 10288662488
]);

echo 'Curso insertado correctamente';
