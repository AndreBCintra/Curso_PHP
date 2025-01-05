<a class="btn btn-outline-primary" href="?pagina=inserir_matricula">Inserir nova matricula. </a><br><br>
<table class="table table-hover table-striped" id="matriculas">
    <thead>
        <tr>
            <th>Nome Aluno</th>
            <th>Nome Curso</th>
            <th>Deletar</th>
        </tr>
    </thead>

    <tbody>
        <?php 
            while($linha = mysqli_fetch_array($consulta_matriculas)) {
                echo '<tr><td>'.$linha['nome_aluno'].'</td>';
                echo '<td>'.$linha['nome_curso'].'</td>';
        ?>
            <td><a class="btn btn-outline-danger" href="deleta_matricula.php?id_matricula=<?php echo $linha['id_aluno_curso']; ?>"><i class="fa-solid fa-trash"></i></a></td></tr>
        
        <?php
            }
        ?>
    </tbody>
</table>