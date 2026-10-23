<?php include __DIR__ . '/../login/vefuser.php'?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espécies</title>
    <link rel="stylesheet" href="/arq_jedi/style/style.css">
</head>
<body>
    <section class="header-container">
        <?php
        //Header da pagina
        include __DIR__ . '/../headerfooter/header.php';
        ?>
    </section>

    <div class="page-body">
        <section class="aside-container">
            <?php
            //Barra lateral da pagina
            include __DIR__ . '/../headerfooter/aside.php';
            ?>
        </section>

        <main class="text-container">
            <section class="card-content">
                <!--Resumo do que se trata a pagina-->
                <h2>Espécies Conhecidas</h2>
                <img src="../imagens/especies.png" alt="Imagem Espécies Conhecidas" width="335px">
                <p>Aqui se encontram os registros de todas as espécies conhecidas <br> da galáxia, com seu nome popular, planeta de origem, idade <br> máxima estimada e verificação de sensitividade a Força de acordo <br> com o histórico conhecido.</p>
                <a href="especies2/espread.php">Ir a lista de Espécies</a>
            </section>
        </main>
    </div>

    <div>
        <section class="footer-container">
            <?php
            //Footer da pagina
            include __DIR__ . '/../headerfooter/footer.php';
            ?>
        </section>
    </div>
</body>
</html>