<?php include __DIR__ . '/../login/vefuser.php'?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupos</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <section class="header-container">
        <?php
        //Header da página
        include __DIR__ . '/../headerfooter/header.php';
        ?>
    </section>

    <div class="page-body">
        <section class="aside-container">
            <?php
            //Barra lateral de acesso
            include __DIR__ . '/../headerfooter/aside.php';
            ?>
        </section>
    
        <main class="text-container">
            <section class="card-content">
                <!--Resumo do que se trata essa pagina-->
                <h2>Grupos Conhecidos</h2>
                <img src="../imagens/mando.jpg" alt="Foto Mandalorianos" width="450px">
                <p>Aqui se encontram os registros de todos os grupos conhecidos na galáxia, <br> sejam religiosos, criminosos e etc... Alguns são históricos e foram <br> exterminados, portanto, não existe uma contagem exata de membros, <br> tampouco o nome de cada membro</p>
                <a href="grupos2/intro.php">Ir a lista de grupos</a>
            </section>
        </main>
    </div>

    <div>
        <section class="footer-container">
            <?php
            //Footer da pagina
            include __DIR__ . '/../headerfooter/footer.php'
            ?>
        </section>
    </div>
</body>
</html>