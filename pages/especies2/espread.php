<?php include __DIR__ . '/../../login/vefuser.php';
include __DIR__ . '/../../database/function.php'?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem Especies</title>
    <link rel="stylesheet" href="../../style/style.css">
</head>
<body>
    <section class="header-container">
        <?php
        //Header do site
        include __DIR__ . '/../../headerfooter/header.php'
        ?>
    </section>
    
    <div class="page-body">
        <section class="aside-container">
            <?php
            //Barra lateral
            include __DIR__ . '/asideesp.php'
            ?>
        </section>

        <main class="text-container2">
            <section class="card-content">
                <h1>Exibidor de Espécies Registradas</h1>
                <?php
                read_esp($conexao);
                ?>
            </section>
        </main>
    </div>

    <div>
        <section class="footer-container">
            <?php
            //Footer do site
            include __DIR__ . '/../../headerfooter/footer.php'
            ?>
        </section>
    </div>
</body>
</html>