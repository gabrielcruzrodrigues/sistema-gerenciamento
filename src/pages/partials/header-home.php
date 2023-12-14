<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistema Gerenciamento</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>
    </head>

    <body>

    <header class="bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>GRcomércios</h1>
                </div>
                <div class="col-md-6 text-right">
                    <nav class="navbar navbar-expand-md">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">

                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#">home</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link text-white" href="src/pages/setores.php">setores</a>
                                </li>
                                
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Cadastrar
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="src/pages/cadastroTrabalhador.php">cadastrar trabalhador</a>
                                        <a class="dropdown-item" href="src/pages/cadastroCargo.php">cadastrar cargo</a>
                                        <a class="dropdown-item" href="src/pages/cadastroTurno.php">cadastrar turno</a>
                                        <a class="dropdown-item" href="src/pages/cadastroSetor.php">cadastrar setor</a>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
