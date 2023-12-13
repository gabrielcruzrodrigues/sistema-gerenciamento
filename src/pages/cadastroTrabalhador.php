<?php include('partials/header-pages.php'); ?> 

<div class="container mt-5">
    <h2>Cadastrar trabalhador</h2>
    <form>
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" placeholder="Digite o nome do trabalhador">
        </div>
        <div class="form-group">
            <label for="motivoContato">Cargo:</label>
            <select class="form-control" id="motivoContato">
                <option value="" disabled selected>Selecione um cargo</option>
                <option value="duvida">teste</option>
            </select>
        </div>
        <div class="form-group">
            <label for="motivoContato">Turno:</label>
            <select class="form-control" id="motivoContato">
                <option value="" disabled selected>Selecione um turno</option>
                <option value="duvida">teste</option>
            </select>
        </div>
        <div class="form-group">
            <label for="motivoContato">Setor:</label>
            <select class="form-control" id="motivoContato">
                <option value="" disabled selected>Selecione um setor</option>
                <option value="duvida">teste</option>
            </select>
        </div>
    
        <button type="submit" class="btn btn-primary">Cadastrar novo trabalhador</button>
    </form>
</div>

<?php include('partials/footer.php'); ?>


