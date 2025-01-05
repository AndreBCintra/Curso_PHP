<!DOCTYPE html>
<html>
<head>
    <title>Curso PHP</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <div class="container">
            <a href="?pagina=home"><img src="assets/logo.png" title="Logo" alt="Logo"></a>
            <div id="menu">
                <a href="?pagina=cursos">Cursos</a>
                <a href="?pagina=alunos">Alunos</a>
                <a href="?pagina=matriculas">Matriculas</a>
                <?php if (isset($_SESSION['login'])){ ?>
                    <a href="logout.php"><?php echo $_SESSION['usuario'] ?> (sair)</a>
                <?php } ?>
            </div>
        </div>
    </header>

    <div id="conteudo" class="container">