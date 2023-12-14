<?php
    include('partials/header-pages.php'); 
    include("../db/conexao.php");

    $sql_cargos = "SELECT * FROM cargo";
    $sql_turnos = "SELECT * FROM turno";
    $sql_setores = "SELECT * FROM setor";
    $res_cargos = $conn->query($sql_cargos);
    $res_turnos = $conn->query($sql_turnos);
    $res_setores = $conn->query($sql_setores);
 ?> 

<div class="container mt-5">
    <h2>Cadastrar trabalhador</h2>
    <form>
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="name" placeholder="Digite o nome do trabalhador">
        </div>
        <div class="form-group">
            <label for="setor">Cargo:</label>
            <?php 

            print "<select class='form-control' name='cargo'>";
            print "<option value='' disabled selected>Selecione um cargo</option>";
            while($row_cargos = $res_cargos->fetch_object()) {
                print "<option value=".$row_cargos->id.">".$row_cargos->name."</option>";
            }
            print "</select>";

            ?>
        </div>
        <div class="form-group">
            <label for="setor">Turno:</label>
            <?php 

            print "<select class='form-control' name='turno'>";
            print "<option value='' disabled selected>Selecione um turno</option>";
            while($row_turnos = $res_turnos->fetch_object()) {
                print "<option value=".$row_turnos->id.">".$row_turnos->name."</option>";
            }
            print "</select>";

            ?>
        </div>
        <div class="form-group">
            <label for="setor">setor:</label>
            <?php 

            print "<select class='form-control' name='setor'>";
            print "<option value='' disabled selected>Selecione um setor</option>";
            while($row_setor = $res_setores->fetch_object()) {
                print "<option value=".$row_setor->id.">".$row_setor->name."</option>";
            }
            print "</select>";

            ?>
        </div>
    
        <button type="submit" class="btn btn-primary">Cadastrar novo trabalhador</button>
    </form>
</div>

<?php include('partials/footer.php'); ?>


