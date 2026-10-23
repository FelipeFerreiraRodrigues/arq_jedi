<?php include __DIR__ . '/../../../login/vefadm.php';
include __DIR__ . '/../../../login/confidencial.php';
include __DIR__ . '/../../../database/function.php'?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Siths</title>
    <link rel="stylesheet" href="../../../style/style.css">
</head>
<body>
    <section class="header-container">
        <?php
        include __DIR__ . '/../../../headerfooter/header.php'
        ?>
    </section>

    <div class="page-body">
        <section class="aside-container">
            <?php
            include __DIR__ . '/asidesith.php'
            ?>
        </section>

        <main class="text-container2">
            <section class="card-content">
                <h1>Exibidor de Siths Registrados</h1>
                <?php
                read_sith($conexao);
                ?>
            </section>
        </main>
    </div>

    <div>
        <section class="footer-container">
            <?php
            include __DIR__ . '/../../../headerfooter/footer.php'
            ?>
        </section>
    </div>
</body>
</html>