<?php 
    include('partials/header-pages.php');
    include("../db/conexao.php"); 

    $sql = "SELECT * FROM setor";
    $res = $conn->query($sql);
    
?>

<div class="container mt-5">
    <h2>Cadastrar cargo</h2>
    <form action="../controller/cargoController.php" method="POST">
        <input type="hidden" name="action" value="create">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="name" placeholder="Digite o nome do novo cargo">
        </div>
        <div class="form-group">
            <label for="setor">Setor:</label>
            <?php 

            print "<select class='form-control' name='setor'>";
            print "<option value='' disabled selected>Selecione um setor</option>";
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