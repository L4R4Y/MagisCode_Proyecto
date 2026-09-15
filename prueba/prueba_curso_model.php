<?php

require_once '../clases/curso_model.php';

$cursoModel = new CursoModel();

$cursos = $cursoModel->obtenerCursos();

foreach ($cursos as $curso){
    echo 'ID:' . $curso['id_curso'] . '<br>';
    echo 'Título: ' . $curso['titulo_curso'] . '<br>';
    echo '<hr>';
}

$cursoModel->crearCurso(
    'Curso PHP',
    'Aprender PHP desde Cero',
    'img/php.jpg',
    'Activo',
    10288662488);
