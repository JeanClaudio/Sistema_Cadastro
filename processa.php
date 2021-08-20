<?php

session_start();

include_once('conexao.php');

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$nome_empresa = filter_input(INPUT_POST, 'nome_empresa', FILTER_SANITIZE_STRING);
$destinatario = filter_input(INPUT_POST, 'destinatario', FILTER_SANITIZE_STRING);
$tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);
$logradouro = filter_input(INPUT_POST, 'logradouro', FILTER_SANITIZE_STRING);
$numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING);
$complemento = filter_input(INPUT_POST, 'complemento', FILTER_SANITIZE_STRING);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
$inf_adicionais = filter_input(INPUT_POST, 'inf_adicionais', FILTER_SANITIZE_STRING);


//echo "Nome: $nome <br>";
//echo "$nome_empresa <br>";
//echo " $destinatario <br>";
//echo " $tipo <br>";
//echo " $logradouro <br>";
//echo " $numero <br>";
//echo " $complemento <br>";
//echo " $cep <br>";
//echo " $cidade <br>";
//echo " $estado <br>";
//echo " $inf_adicionais <br>";

$result_usuario = "INSERT INTO tbtestcadastro (nome, nome_empresa, destinatario, tipo, logradouro, num_casa, complemento, cep, cidade, estado, info_adic, data_envio, cod_rastreio,data_create, data_update) VALUES ('$nome', '$nome_empresa', '$destinatario', '$tipo', '$logradouro', '$numero', '$complemento', '$cep', '$cidade', '$estado','$inf_adicionais', NOW(), '999', NOW(), NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);


if(mysqli_insert_id($conn)){

    $_SESSION['msg'] =               
                        "<script type='text/javascript'>                        
                        Swal.fire({
                            icon: 'success',
                            title: 'OK',
                            text: 'Cadastrado com sucesso!',
                          })                        
                        </script>
                        "  
    ;
    header("Location: index.php");
}else{

    $_SESSION['msg'] =               
    "<script type='text/javascript'>                        
    Swal.fire({
        icon: 'error',
        title: ':(',
        text: 'Não foi possível realizar cadastro',
      })                        
    </script>
    "  
;
header("Location: index.php");
};

