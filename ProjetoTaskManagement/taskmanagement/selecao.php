<?php
    require_once 'conexao.php'; 
    $idUsuario = $_SESSION["idU"];
        $query = "SELECT * FROM tarefas WHERE usuario_id = $idUsuario";

        foreach ($conexao -> query($query) as $valor) {
            echo '<tr>
                    <td>'.$valor["id"].'</td>
                    <td>'.$valor["titulo"].'</td>
                    <td>'.$valor["descricao"].'</td>
                    <td>'.$valor["status"].'</td>
                    <td>     
                        <button onclick="pegarIDEdit(this)" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editTaskModal" data-idTarefa = "'.$valor["id"].'" data-titulo="'.$valor["titulo"].'" data-descricao="'.$valor["descricao"].'" data-status="'.$valor["status"].'">Editar</button>
                        <button onclick="pegarIDExcluir(this)" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal" data-idTarefa = "'.$valor["id"].'">Excluir</button>
                    </td>
                </tr>';
        }
?>