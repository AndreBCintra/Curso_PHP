<a class="btn btn-outline-primary" href="?pagina=inserir_aluno">Inserir novo aluno. </a><br><br>
<table class="table table-hover table-striped" id="alunos">
    <thead>
        <tr>
            <th>Nome Aluno</th>
            <th>Data De Nascimento</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>

    <tbody>
        <?php 
            while($linha = mysqli_fetch_array($consulta_alunos)) {
                echo '<tr><td>'.$linha['nome_aluno'].'</td>';
                echo '<td>'.$linha['data_nascimento'].'</td>';
        ?>
            <td><a class="btn btn-outline-warning" href="?pagina=inserir_aluno&editar=<?php echo $linha['id_aluno']; ?>"><i class="fa-regular fa-pen-to-square"></i></a></td>
            <td><a class="btn btn-outline-danger" href="deleta_aluno.php?id_aluno=<?php echo $linha['id_aluno']; ?>"><i class="fa-solid fa-trash"></i></a></td></tr>
        
        <?php
            }
        ?>
    </tbody>
</table>