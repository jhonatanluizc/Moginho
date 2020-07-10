<!DOCTYPE html>

<html lang="pt_br">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Public/Vendor/bootstrap/css/bootstrap.min.css">
  <link rel="shortcut icon" href="../Public/Images/mongoose.png">
  <link rel="stylesheet" href="../Public/Styles/main.css">
  <title>Moginho</title>

</head>

<body>

  <header>

    <!-- Início da navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
      <a class="navbar-brand" href="index.php">Moginho</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="Schema.php">Nova Tabela<span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link active" href="Insert.php">Inserir Dados<span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link active" data-toggle="modal" data-target="#exampleModal">Listar Tabela<span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="uso.php">Como usar</a>
          <a class="nav-item nav-link" href="sobre.php">Sobre</a>
        </div>
      </div>
    </nav>
    <!--Fim da navbar-->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Listar Tabela</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="Select.php" method="GET">
              <label for="table">Nome da Tabela</label>
              <input class="form-control" name="table" type="text">
              <br>
             
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"> Cancelar </button>
                <button class="btn btn-success" type="submit">Listar Tabela</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </header>