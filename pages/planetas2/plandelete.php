<?php include __DIR__ . '/../../login/vefadm.php';
include __DIR__ . '/../../database/function.php'?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Planetas</title>
    <link rel="stylesheet" href="../../style/style.css">
</head>
<body>
    <section class="header-container">
        <?php include __DIR__ . '/../../headerfooter/header.php'?>
    </section>

    <div class="page-body">
        <section class="aside-container">
            <?php
            //Barra lateral
            include __DIR__ . '/asideplan.php'
            ?>
        </section>

        <main class="text-container">
            <section class="card-content">
                <h1>Apagar Planeta</h1>
                <form action="" method="post">
                    <label for="id">ID: </label>
                    <input type="number" name="id" id="id">
                    <input type="submit" value="Deletar">
                </form>

                <?php
                if($_SERVER['REQUEST_METHOD'] == "POST"){
                    deletar_plan($conexao, $_POST['id']);
                }
                ?>
            </section>
        </main>
    </div>  

    <div>
        <section class="footer-container">
            <?php include __DIR__ . '/../../headerfooter/footer.php'?>
        </section>
    </div>
</body>
</html>