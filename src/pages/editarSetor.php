<?php 
    include('partials/header-pages.php'); 
    include("../db/conexao.php");
    $sql = "SELECT * FROM setor WHERE id = ".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<div class="container mt-5">
    <h2>Editar setor</h2>
    <form action="../controller/setorController.php" method="POST">
        <input type="hidden" name="action" value="update">
        <input type="hidden" name="id" value="<?php print $row->id; ?>">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" name="name" value="<?php print $row->name ?>" placeholder="Digite o nome do setor" required>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar setor</button>
    </form>
</div>

<?php include('partials/footer.php'); ?>