<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}
if(!isset($_SESSION['id']) || !$_SESSION['is_admin']){
    //verifica se o usuario esta logado como admin, caso contrário joga ele para tela de login
    header("Location: /arq_jedi/login/login.php");
    exit();
}
?>