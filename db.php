<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "curso_php";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

/*$query = "DROP TABLE CURSOS";

$consulta = mysqli_query($conexao, $query);

$query = "CREATE TABLE CURSOS(
    id_curso int not null auto_increment,
    nome_curso varchar(255) not null,
    carga_horaria int not null,
    primary key(id_curso)
)";

$consulta = mysqli_query($conexao, $query);

$query = "CREATE TABLE ALUNOS(
    id_aluno int not null auto_increment,
    nome_aluno varchar(255) not null,
    data_nascimento varchar(255) not null,
    primary key(id_aluno)
)";

$consulta = mysqli_query($conexao, $query);

$query = "CREATE TABLE ALUNOS_CURSOS(
    id_aluno_curso int not null auto_increment,
    id_aluno int not null,
    id_curso int not null,
    primary key(id_aluno_curso)
)";

$consulta = mysqli_query($conexao, $query);*/

$query = "SELECT * FROM CURSOS";
$consulta_cursos = mysqli_query($conexao, $query);

$query = "SELECT * FROM ALUNOS";
$consulta_alunos = mysqli_query($conexao, $query);

$query = "SELECT alunos_cursos.id_aluno_curso, alunos.nome_aluno, cursos.nome_curso
            FROM alunos, cursos, alunos_cursos
            WHERE alunos_cursos.id_aluno = alunos.id_aluno
            AND alunos_cursos.id_curso = cursos.id_curso";
$consulta_matriculas = mysqli_query($conexao, $query);