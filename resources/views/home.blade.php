<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../../"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <header class="container-fluid">
        <nav class="navbar bg-dark">
            <div class="container-fluid">
                <a href="">AGENDA TELEFONICA</a>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#criarContato">Criar Contato</button>
            </div>
        </nav>
        <p>teste</p>
    </header>
    <main>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>N° Celular</th>
                    <th>E-mail</th>
                    <th>Endereço</th>
                    <th>Nota</th>
                    <th>Ações</th>
                </tr>
            </thead>
        </table>
    </main>
    <div class="modal fade" id="criarContato" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">titulo</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h1>teste</h1>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>