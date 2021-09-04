<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Pesquisa</title>
  </head>
  <body>
      <?php

        $pesquisa = $_POST['busca'] ?? '';

        include "conexao.php";

        $sql = "SELECT * FROM livro WHERE autor LIKE '%$pesquisa%'";

        $dados = mysqli_query($conn, $sql);

        while ($linha = mysqli_fetch_assoc($dados) ){
            foreach ($linha as $key => $value){
                echo "$key: $value";
            }
            echo "<br>";
          }

      ?>

      <div class="container">
          <div class="row">
              <div class="col">
               <h1>Formulário de Pesquisa</h1>
               <nav class="navbar navbar-light bg-light">
                    <form class="form-inline" action="pesquisa.php" method="POST">
                     <input class="form-control mr-sm-2" type="Pesquisar" placeholder="Pesquisar" aria-label="Persquisar" name="busca">
                     <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                    </form>
                 </div>
              </nav>
              <table class="table table-hover">
                     <thead>
                            <tr>
                            <th scope="rom">1</th>
                            <th scope="col">Autor</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Categoria</th>
                            </tr>
                     </thead>
                        <tbody>
                          <tr>
                          <th scope="rom"></th>
                            <td>Clarice Lispector</td>
                            <td>A hora da estrela</td>
                            <td>Romance Literário</td>
                            <td></td>
                            </tr>
                          <tr>
                    
                        </tbody>
             </table>
              
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