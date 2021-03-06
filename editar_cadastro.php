<?php
    session_start();
    include_once('conexao.php');
    $id = filter_input(INPUT_GET, 'id',FILTER_SANITIZE_NUMBER_INT);
    $result_usuario = "SELECT * FROM tbtestcadastro WHERE id ='$id'";
    $resulto_usuario = mysqli_query($conn,$result_usuario);
    $row_usuario = mysqli_fetch_assoc($resulto_usuario);
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

    <title>Editar Cadastro</title>
  </head>
  <body>
    <header class="justify-content-center text-center bg-primary text-light p-2">
        <h1>Editar Cadastro</h1>
    </header>

    <!----------------------------------Container_Formulário/Início---------------------------->
    <div class="row justify-content-center mb-5">
        <div class="col-sm-12 col-md-10 col-lg-8">

            <!----------------------------------Sweetalert_Mensagem---------------------------->
            <?php
                  if(isset($_SESSION['msg'])){                    
                   echo $_SESSION['msg'];                        
                   unset ($_SESSION['msg']);
                }            
            ?>

            <!----------------------------------Formulário_Início---------------------------->
            <form method="POST" action="proc_edit_usuario.php" class="pt-5">
                <div class="form-row">
                <h2 class="container-fluid">Informações p/ cadastro</h2>
                
                    <!----------------------------------Dados_pessoais---------------------------->
                    <input type="hidden" name="id" value="<?php echo $row_usuario['id'];?>">

                    <div class="form-group col-sm-6">
                        <label for="inputNome">Seu nome</label>
                        <input type="text" name="nome" class="form-control" id="inputNome" placeholder="Digite seu nome" value="<?php echo $row_usuario['nome'];?>">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="inputNomeempresa">Nome da empresa</label>
                        <input type="text" name="nome_empresa" class="form-control" id="inputNomeempresa" placeholder="Digite o nome da empresa" value="<?php echo $row_usuario['nome_empresa'];?>">
                    </div> 
                    <div class="form-group col-sm-6">
                        <label for="inputDest">Destinatário</label>
                        <input type="text" name="destinatario" class="form-control" id="inputDest" placeholder="Digite seu nome" value="<?php echo $row_usuario['destinatario'];?>">
                    </div>
                    <div class="form-group col-sm-2">
                        <label for="inputTip">Tipo</label>
                        <select id="inputTip" name="tipo" class="form-control" >
                            <option><?php echo $row_usuario['tipo'];?></option>
                            <option>Carta Comum</option>
                            <option>Carta Registrada</option>
                            <option>Pac</option>
                            <option>Sedex</option>
                        </select>                        
                    </div>

                    <!----------------------------------Endereço---------------------------->
                    <h2 class="container-fluid">Endereço</h2>

                    <div class="form-group col-sm-10">
                        <label for="inputLogr">Logradouro</label>
                        <input type="text" name="logradouro" class="form-control" id="inputLogr" placeholder="Endereço completo" value="<?php echo $row_usuario['logradouro'];?>">                        
                    </div>
                    <div class="form-group col-sm-2">
                        <label for="inputNume">Número</label>
                        <input type="text" name="numero" class="form-control" id="inputNume" placeholder="N° Casa" value="<?php echo $row_usuario['num_casa'];?>">                        
                    </div>
                    <div class="form-group col-sm-4">
                        <label for="inputComp">Complemento</label>
                        <input type="text" name="complemento" class="form-control" id="inputComp" placeholder="Complemento" value="<?php echo $row_usuario['complemento'];?>">                        
                    </div>
                    <div class="form-group col-sm-3">
                        <label for="inputCep">Cep</label>
                        <input type="text" name="cep" class="form-control" id="inputCep" placeholder="Endereço completo" value="<?php echo $row_usuario['cep'];?>">                        
                    </div>
                    <div class="form-group col-sm-3">
                        <label for="inputCid">Cidade</label>
                        <input type="text" name="cidade" class="form-control" id="inputCid" placeholder="Cidade" value="<?php echo $row_usuario['cidade'];?>">                        
                    </div>
                    <div class="form-group col-sm-2">
                        <label for="inputEst">Estado</label>
                        <select id="inputEst" name="estado" class="form-control">
                            <option><?php echo $row_usuario['estado'];?></option>
                            <option>AC</option>
                            <option>AL</option>
                            <option>AP</option>
                            <option>AM</option>
                            <option>BA</option>
                            <option>CE</option>
                            <option>ES</option>
                            <option>GO</option>
                            <option>MA</option>
                            <option>MT</option>
                            <option>MS</option>
                            <option>MG</option>
                            <option>PA</option>
                            <option>PB</option>
                            <option>PR</option>
                            <option>PE</option>
                            <option>PI</option>
                            <option>RJ</option>
                            <option>RN</option>
                            <option>RS</option>
                            <option>RO</option>
                            <option>RR</option>
                            <option>SC</option>
                            <option>SP</option>
                            <option>SE</option>
                            <option>TO</option>
                            <option>DF</option>
                        </select>                        
                    </div>
                    <div class="form-group col-sm-12">
                        <label for="exampleFormControlTextarea1">Informações adicionais</label>
                        <textarea class="form-control" name="inf_adicionais" id="exampleFormControlTextarea1" rows="3" ><?php echo $row_usuario['info_adic'];?></textarea>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Editar">

                </div>
            </form>
            <!----------------------------------Formulário_Fim---------------------------->

        </div>
    </div>
    <!----------------------------------Container_Formulário/Fim---------------------------->

    <!----------------------------------Botão_Ver_Tabela/registros---------------------------->
    <div class="container text-center">
    <a href="http://localhost:8080/tabela_cadastros.php" target="blank"><button class="btn btn-success">Visualizar tabela de Registros</button></a>
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