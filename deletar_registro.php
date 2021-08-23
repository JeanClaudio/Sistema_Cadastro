<?php

session_start();

include_once('conexao.php');

$id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);

$result_usuario = "DELETE FROM tbtestcadastro WHERE id='$id'";
$resulto_usuarios = mysqli_query($conn,$result_usuario);

if(mysqli_affected_rows($conn)){
  $_SESSION['msg'] =               
  "<script type='text/javascript'>                        
  Swal.fire({
      icon: 'success',
      title: 'OK',
      text: 'Registro apagado com socesso',
    })                        
  </script>
  "  
;
header("Location: tabela_cadastros.php");
}else{

$_SESSION['msg'] =               
"<script type='text/javascript'>                        
Swal.fire({
icon: 'error',
title: ':(',
text: 'Não foi possível apagar o registro',
})                        
</script>
"  
;
header("Location: tabela_cadastros.php");
}
?>
