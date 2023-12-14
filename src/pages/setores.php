<?php
    include('partials/header-pages.php'); 
    include("../db/conexao.php"); 
    $sql = "SELECT * FROM setor";
    $res = $conn->query($sql);

    if ($res->num_rows > 0) {
            print "<table class='table table-hover table-striped table-bordered'>";
            print "<tr>";
            print "<th>id</th>";
            print "<th>nome</th>";
            print "<th>ações</th>";
            print "</tr>";
        while($row = $res->fetch_object()) {
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->name."</td>";
            print "<td>
                        <button onclick=\"location.href='editarSetor.php?id=".$row->id."';\" class='btn btn-success'>editar</button>
                        
                        <button onclick=\"
                        if(confirm('Tem certeza que deseja excluir?')){
                            location.href='../controller/setorController.php?action=delete&id=".$row->id."';
                        }else{false}\" 
                        class='btn btn-danger'>deletar</button>

                    </td>";
            print "</tr>";
        }
        print "</table>";
    } else {
        print "<p class='alert alert-danger'>Não foram encontrados resultados</p>";
    }
 ?>

<!-- <div class="container mt-5 d-flex justify-content-left">
    <div class="card" style="width: 18rem; margin-right: 20px;">
        <div class="card-body">
            <h3 class="card-title">Setor teste 1</h3>
            <h4>cargos:</h4>
            <p class="card-text">cargo teste 1</p>
            <p class="card-text">cargo teste 2</p>
            <h4>trabalhadores:</h4>
            <p class="card-text">trabalhador teste 1</p>
            <p class="card-text">trabalhador teste 2</p>
            <h4>turnos:</h4>
            <p class="card-text">matutino:</p>
            <p class="card-text">1</p>
            <p class="card-text">vespertino:</p>
            <p class="card-text">1</p>
            <p class="card-text">noturno:</p>
            <p class="card-text">1</p>
            <a href="#" class="btn btn-primary">Ver mais detalhes</a>
        </div>
    </div>


    <div class="card" style="width: 18rem; margin-right: 20px;">
        <div class="card-body">
            <h3 class="card-title">Setor teste 2</h3>
            <h4>cargos:</h4>
            <p class="card-text">cargo teste 1</p>
            <p class="card-text">cargo teste 2</p>
            <h4>trabalhadores:</h4>
            <p class="card-text">trabalhador teste 1</p>
            <p class="card-text">trabalhador teste 2</p>
            <h4>turnos:</h4>
            <p class="card-text">matutino:</p>
            <p class="card-text">1</p>
            <p class="card-text">vespertino:</p>
            <p class="card-text">1</p>
            <p class="card-text">noturno:</p>
            <p class="card-text">1</p>
            <a href="#" class="btn btn-primary">Ver mais detalhes</a>
        </div>
    </div>
</div> -->

<?php include('partials/footer.php'); ?>