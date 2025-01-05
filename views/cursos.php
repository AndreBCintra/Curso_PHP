<a class="btn btn-outline-primary" href="?pagina=inserir_curso">Inserir novo curso. </a><br><br>
<table class="table table-hover table-striped" id="cursos">
    <thead>
        <tr>
            <th>Nome Curso</th>
            <th>Carga Horária</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>

    <tbody>
        <?php 
            while($linha = mysqli_fetch_array($consulta_cursos)) {
                echo '<tr><td>'.$linha['nome_curso'].'</td>';
                echo '<td>'.$linha['carga_horaria'].'</td>';
        ?>
            <td><a class="btn btn-outline-warning" href="?pagina=inserir_curso&editar=<?php echo $linha['id_curso']; ?>"><i class="fa-regular fa-pen-to-square"></i></a></td>
            <td><a class="btn btn-outline-danger" href="deleta_curso.php?id_curso=<?php echo $linha['id_curso']; ?>"><i class="fa-solid fa-trash"></i></a></td></tr>
        
        <?php
            }
        ?>
    </tbody>
</table>