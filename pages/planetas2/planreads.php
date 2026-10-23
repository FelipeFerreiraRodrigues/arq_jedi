<?php include __DIR__ . '/../../login/vefuser.php';
include __DIR__ . '/../../database/function.php'?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem Planetas</title>
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
                <h1>Exibidor de Planeta Específico</h1>
                <form action="" method="post">
                    <label for="id">ID: </label>
                    <input type="number" name="id" id="id" placeholder="Insira o ID para consultar a planeta" required>
                    <input type="submit" value="Consultar">
                </form>
                <?php
                if($_SERVER['REQUEST_METHOD']=="POST"){
                    readid_plan($conexao, $_POST['id']);
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