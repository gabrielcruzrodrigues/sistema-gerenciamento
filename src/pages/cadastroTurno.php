<?php 
    include('partials/header-pages.php');
    include("../db/conexao.php"); 

    $sql = "SELECT * FROM cargo";
    $res = $conn->query($sql);
    
?>

<div class="container mt-5">
    <h2>Cadastrar turno</h2>
    <form action="../controller/turnoController.php" method="POST">
        <input type="hidden" name="action" value="create">
        <div class="form-group">
            <label for="nome">Novo turno:</label>
            <input type="text" class="form-control" id="nome" name="name" placeholder="Digite o nome do novo cargo">
        </div>
        <div class="form-group">
            <label for="setor">cargo:</label>
            <?php 

            print "<select class='form-control' name='cargo'>";
            print "<option value='' disabled selected>Selecione um cargo</option>";
            while($row = $res->fetch_object()) {
                print "<option value=".$row->id.">".$row->name."</option>";
            }
            print "</select>";

            ?>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar novo cargo</button>
    </form>
</div>

<?php include('partials/footer.php'); ?>