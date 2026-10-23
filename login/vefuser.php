<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}
if(!isset($_SESSION['id'])){
    //se não estiver logado, ele joga para a tela de login
    header("Location: /arq_jedi/login/login.php");
    exit();
}
?>