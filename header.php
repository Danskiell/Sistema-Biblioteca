<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <title>Biblioteca</title>
</head>

<body>
    <header>
        <?php if (isset($_SESSION['login'])): ?>
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-dark p-4 rounded-bottom shadow">
                    <h5 class="text-light fw-bold">Biblioteca para Todos</h5>
                    <p class="text-muted">Oficina de leitura e aprendizado</p>
                    <div>
                        <a href="?pagina=cadastros" class="linkMenu d-block mb-2">Cadastrar Livro</a>
                        <a href="logout.php" class="linkMenu d-block">Sair</a>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-dark bg-dark shadow-sm">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </nav>
        <?php endif; ?>
    </header>
