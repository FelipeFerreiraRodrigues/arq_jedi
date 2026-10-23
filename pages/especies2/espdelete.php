<?php include __DIR__ . '/../../login/vefadm.php';
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
    

        <main class="text-container">
            <section class="card-container">
                <h1>Apagar Espécie</h1>
                <form action="" method="post">
                    <label for="id">ID: </label>
                    <input type="number" name="id" id="id">
                    <input type="submit" value="Deletar">
                </form>

                <?php
                if($_SERVER['REQUEST_METHOD'] == "POST"){
                    deletar_esp($conexao, $_POST['id']);
                }
                ?>

            </section>
        </main>
    </div>

    <div>
        <section>
            <h2>Aqui será onde ficará o DELETE da página</h2>
        </section>
    </div>

    <div>
        <section>
            <?php
            //Footer do site
            include __DIR__ . '/../../headerfooter/footer.php'
            ?>
        </section>
    </div>
</body>
</html>