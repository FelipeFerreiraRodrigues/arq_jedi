<?php include __DIR__ . '/../login/vefuser.php';
include __DIR__ . '/../database/function.php'?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membros Ordem Jedi</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <section class="header-container">
        <?php
        //Aqui é o header
        include __DIR__ . '/../headerfooter/header.php';
        ?>
    </section>

    <div class="page-body">
        <section class="aside-container">
            <?php
            //Aqui é a barra lateral
            include __DIR__ . '/../headerfooter/aside.php'
            ?>
        </section>

        <main class="text-container">
            <section class="card-content">
                <!--Explicação do que a pagina se trata-->
                <h2>Membros da Ordem Jedi</h2>
                <img src="../imagens/altarepub2.jpg" alt="Membros Ordem Jedi" width="500px">
                <p>Aqui se encontram os registros de cada membro da Ordem Jedi que possui acesso aos Arquivos Jedi</p>
                <a href="membros2/listagem.php">Visualizar Membros Registrados</a>
            </section>
        </main>
    </div>

    <div>
        <section class="footer-container">
            <?php
            //Aqui é o footer
            include __DIR__ . '/../headerfooter/footer.php';
            ?>
        </section>
    </div>
</body>
</html>