<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Formulário</title>
  </head>
  <body>
      <div class="container">
          <div class="row">
              <div class="col">
              <h1>Formulário para livraria</h1>
              <div class="col">
              <h4> Cadastrar informações ao Banco de Dados</h4>

              <form action="formulario_script.php" method="POST">
                 <div class="form-group">
                    <label for="autor">Autor</label>
                    <input type="text" class="form-control" name="autor" required>
                 </div>
                 <div class="form-group">
                    <label for="titulo">Titulo do Livro</label>
                    <input type="text" class="form-control" name="titulo" required>
                 </div>
                 <div class="form-group">
                    <label for="Categoria">Categoria do Livro</label>
                    <input type="text" class="form-control" name="categoria">
                 </div>
                 <div class="form-group">
                    <input type="submit" class="btn btn-primary mb-2">
                 </div>
               </form>
               <a href="index.php" class="btn btn-info">Voltar para o inicio</a>
              </div>
           </div>
        </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>