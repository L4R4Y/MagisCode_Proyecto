<?php

require_once 'conexion.php';

class CursoModel{

    private PDO $pdo;

    public function __construct(){

        $conexion = new Conexion();

        $this->pdo = $conexion->getConexion();

    }
    // Consultar Cursos
    public function obtenerCursos(): array
    {
        $sql = "SELECT * FROM curso";

            $resultado = $this->pdo->query($sql);

        return $resultado->fetchAll(PDO::FETCH_ASSOC);
    }

    // Crear Curso
    public function crearCurso(
        string $titulo, string $descripcion, string $ruta, string $estado, int $idProfesor): void
    {
        $sql = "INSERT INTO curso
                (titulo_curso, descripcion_curso, ruta_imagen, estado_curso, id_usuario_c)
                VALUES (:titulo, :descripcion, :ruta, :estado, :idprofesor)";

        $sentencia = $this->pdo->prepare($sql);

        $sentencia->execute([
            ':titulo' => $titulo,
            ':descripcion' => $descripcion,
            ':ruta' => $ruta,
            ':estado' => $estado,
            ':idprofesor' => $idProfesor
        ]);

    }

    // Actualizar Curso
    public function actualizarCurso(
        int $idCurso,
        string $titulo,
        string $descripcion,
        string $ruta,
        string $estado): void{

        $sql = "UPDATE curso SET
        titulo_curso = :titulo,
        descripcion_curso = :descripcion,
        ruta_imagen = :ruta
        estado_curso = :id";

        $sentencia = $this->pdo->prepare($sql);

        $sentencia->execute([
            ':titulo' => $titulo,
            'descripcion' => $descripcion,
            ':ruta' => $ruta,
            ':estado' => $estado,
            ':id' => $idCurso]);
    }

}
