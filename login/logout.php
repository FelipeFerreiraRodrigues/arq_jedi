<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}
//Faz com que o usuario seja deslogado, destruindo a sessão
$_SESSION = array();
session_destroy();

//Após a destruição da sessão, joga o usuário de volta ao index
header("Location: ../index.php");
exit();
?>