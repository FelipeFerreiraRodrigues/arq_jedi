<?php include __DIR__ . '/../login/vefuser.php'?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planetas</title>
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
            //Barra lateral de navegação
            include __DIR__ . '/../headerfooter/aside.php';
            ?>
        </section>

        <main class="text-container">
            <section class="card-content">
                <!--Resumo do que a pagina se trata-->
                <h2>Planetas Conhecidos</h2>
                <img src="../imagens/coruscant.jpg" alt="Planeta Coruscant">
                <p>Aqui se encontram os registros de todos os planetas conhecidos <br> da galáxia, com seu nome, região que se encontra na galáxia e <br> sua geografia de acordo com o histórico conhecido.</p>
                <a href="planetas2/planread.php">Ir a lista de planetas</a>
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