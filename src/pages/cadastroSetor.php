<?php 
    include('partials/header-pages.php'); 
?>

<div class="container mt-5">
    <h2>Cadastrar setor</h2>
    <form action="../controller/setorController.php" method="POST">
        <input type="hidden" name="action" value="create">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" name="name" placeholder="Digite o nome do setor" required>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar novo setor</button>
    </form>
</div>

<?php include('partials/footer.php'); ?>