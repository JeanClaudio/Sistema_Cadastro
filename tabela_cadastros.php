<?php
  include_once("conexao.php");
  $result_cursos = "SELECT * from tbtestcadastro";
  $resulto_cursos = mysqli_query($conn,$result_cursos);
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <script src="sweetalert.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <title>Teste Emprego</title>
  </head>
  <body>

    <header class="justify-content-center text-center bg-primary text-light p-2">
        <h1>Lista de Cadastros</h1>
    </header>

    <div class="container-fluid">
        <a href="" class="btn btn-success btn-lg mt-5"><i class="fas fa-plus"></i> Cadastrar mais</a>

        <table class="table table-bordered mt-5 text-center table-striped table-responsive">
            <thead class="thead-dark">
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Editar/Excluir</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Nome empresa</th>
                  <th scope="col">Destinatário</th>
                  <th scope="col">Tipo</th>
                  <th scope="col">Logradouro</th>
                  <th scope="col">N° Casa</th>
                  <th scope="col">Complemento</th>
                  <th scope="col">Cep</th>
                  <th scope="col">Cidade</th>
                  <th scope="col">Estado</th>
                  <th scope="col">Info.</th>
                  <th scope="col">Data Envio</th>
                  <th scope="col">Cod. Rastreio</th>
                  <th scope="col">Data criação</th>
                  <th scope="col">Data Mod.</th>
                </tr>
            </thead>
            <tbody>

            <?php while($rows_cursos = mysqli_fetch_assoc($resulto_cursos)) { ?>
      
                  <tr>
                    <th scope="row"><?php echo $rows_cursos['id'];?></th>
                    <td>
                      <button class="btn"><i class="fas fa-cog fa-lg"></i></button>
                    <button class="btn"><i class="fas fa-times-circle fa-lg" style="color: red;"></i></button>
                    
                  </td>
                    <td><?php echo $rows_cursos['nome'];?></td>
                    <td><?php echo $rows_cursos['nome_empresa'];?></td>
                    <td><?php echo $rows_cursos['destinatario'];?></td>
                    <td><?php echo $rows_cursos['tipo'];?></td>
                    <td><?php echo $rows_cursos['logradouro'];?></td>
                    <td><?php echo $rows_cursos['num_casa'];?></td>
                    <td><?php echo $rows_cursos['complemento'];?></td>
                    <td><?php echo $rows_cursos['cep'];?></td>
                    <td><?php echo $rows_cursos['cidade'];?></td>
                    <td><?php echo $rows_cursos['estado'];?></td>
                    <td><?php echo $rows_cursos['info_adic'];?></td>
                    <td><?php echo $rows_cursos['data_envio'];?></td>
                    <td><?php echo $rows_cursos['cod_rastreio'];?></td>
                    <td><?php echo $rows_cursos['data_create'];?></td>
                    <td><?php echo $rows_cursos['data_update'];?></td>
                  </tr>

                  <?php }?>
                  
            </tbody>
        </table>
    </div>




    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>