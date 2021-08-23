<?php
  session_start();
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

  <style>
    span{
      font-weight: bold;
    }
  </style>

  </head>
  <body>

    <header class="justify-content-center text-center bg-primary text-light p-2">
        <h1>Lista de Cadastros</h1>
    </header>

    <?php
                    if(isset($_SESSION['msg'])){                    
                        echo $_SESSION['msg'];                        
                        unset ($_SESSION['msg']);
                    }            
                ?>

    <div class="container-fluid">
    
        <a href="http://localhost:8080/index.php" class="btn btn-success btn-lg mt-5" ><i class="fas fa-plus"></i> Cadastrar mais</a>

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
                      <?php echo "<a href='" . $rows_cursos['id'] ."' data-toggle='modal' data-target='#exampleModal" . $rows_cursos['id'] ."' data-whatever='@mdo'><i class='fas fa-search fa-lg' style='color: #339af0;'></i></a>";?>
                      <?php echo "<a href='editar_cadastro.php?id=" . $rows_cursos['id'] ." '><i class='fas fa-cog fa-lg' style='color: black;'></i></a>";?>
                      <?php echo "<a href='deletar_registro.php?id=" . $rows_cursos['id'] ."'><i class='fas fa-times-circle fa-lg' style='color: red;'></i></a>";?>
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
                    <td><?php echo mb_strimwidth($rows_cursos['data_envio'], 0, 16);?></td>
                    <td><?php echo $rows_cursos['cod_rastreio'];?></td>
                    <td><?php echo mb_strimwidth($rows_cursos['data_create'], 0, 16);?></td>
                    <td><?php echo mb_strimwidth($rows_cursos['data_update'], 0, 16);?></td>
                  </tr>

                  <!-- Modal início -->
                  <div class="modal fade" id="exampleModal<?php echo $rows_cursos['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                          <div class="modal-header justify-content-center">
                            <h5 class="modal-title" id="exampleModalLabel">REGISTRO ID: <?php echo $rows_cursos['id'];?></h5>
                          </div>
                          <div class="modal-body">
                            <ul>
                              <li><span>Nome:</span> <?php echo $rows_cursos['nome'];?></li>
                              <li><span>Nome empresa:</span> <?php echo $rows_cursos['nome_empresa'];?></li>
                              <li><span>Destinatario:</span> <?php echo $rows_cursos['destinatario'];?></li>
                              <li><span>Tipo:</span> <?php echo $rows_cursos['tipo'];?></li>
                              <li><span>Logradouro:</span> <?php echo $rows_cursos['logradouro'];?></li>
                              <li><span>N° da casa:</span> <?php echo $rows_cursos['num_casa'];?></li>
                              <li><span>Complemento:</span> <?php echo $rows_cursos['complemento'];?></li>
                              <li><span>Cep:</span> <?php echo $rows_cursos['cep'];?></li>
                              <li><span>Cidade:</span> <?php echo $rows_cursos['cidade'];?></li>
                              <li><span>Estado:</span> <?php echo $rows_cursos['estado'];?></li>
                              <li><span>Inf. adicionais:</span> <?php echo $rows_cursos['info_adic'];?></li>
                              <li><span>Data de envio:</span> <?php echo $rows_cursos['data_envio'];?></li>
                              <li><span>Cod. de rastreio:</span> <?php echo $rows_cursos['cod_rastreio'];?></li>
                              <li><span>Data de criação:</span> <?php echo $rows_cursos['data_create'];?></li>
                              <li><span>Data de modificação:</span> <?php echo $rows_cursos['data_update'];?></li>
                            </ul>
                          </div>
                          

                          <div class="modal-footer justify-content-center">
                            <button type="button" class="btn btn-primary " data-dismiss="modal">Fechar</button>
                          </div>
                        </div>          
                    </div>
                </div>
                <!-- Modal fim -->

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