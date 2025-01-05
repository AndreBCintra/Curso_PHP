<h1 style="text-align:center">Bem Vindo a fluentz</h1>

<form method="post" action="login.php">
    <label class="badge text-bg-secondary">Usuário</label>
    <input type="text" name="usuario" placeholder="Nome do usuário" class="form-control">
    <br>
    <label class="badge text-bg-secondary">Senha</label>
    <input type="password" name="senha" placeholder="Digite a senha" class="form-control">
    <br>
    <?php if (isset($_GET['erro'])){ ?>
        <div class="alert alert-danger" role="alert">
            Usuário e/ou senha inválido(s).
        </div>
    <?php } ?>
    <br>
    <input type="submit" value="Entrar" class="btn btn-success">

</form>