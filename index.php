<?php

session_start();

include 'db.php';

include 'header.php';

if(isset($_SESSION['login'])){
  if(isset($_GET['pagina'])){
    $pagina = $_GET['pagina'];
  }
  else {
    $pagina = 'cursos';
  }  
}
else {
  $pagina = 'home';
}

switch($pagina){
  case 'cursos': include 'views/cursos.php'; break;
  case 'inserir_curso': include 'views/inserir_curso.php'; break;
  case 'alunos': include 'views/alunos.php'; break;
  case 'inserir_aluno': include 'views/inserir_aluno.php'; break;
  case 'matriculas': include 'views/matriculas.php'; break;
  case 'inserir_matricula': include 'views/inserir_matricula.php'; break;
  default: include 'views/home.php'; break;
}

include 'footer.php';

/*$query = "INSERT INTO ALUNOS_CURSOS(id_aluno, id_curso) VALUES(1, 1)";

$executar = mysqli_query($conexao, $query);

$executar = mysqli_query($conexao, "ALTER TABLE CURSOS CHANGE id id_curso int not null auto_increment");

if($executar){
  echo "Feito com sucesso";
}
else{
  echo "Falhou";
}
*/