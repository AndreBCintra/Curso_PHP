<?php

include 'db.php';

$id_matricula = $_GET['id_matricula'];

$query = "DELETE FROM ALUNOS_CURSOS WHERE ID_ALUNO_CURSO = $id_matricula";

mysqli_query($conexao, $query);

header('location:index.php?pagina=matriculas');