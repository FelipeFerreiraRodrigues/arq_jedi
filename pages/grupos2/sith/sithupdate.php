<?php include __DIR__ . '/../../../login/vefadm.php';
include __DIR__ . '/../../../login/confidencial.php';
include __DIR__ . '/../../../database/function.php'?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Sith</title>
    <link rel="stylesheet" href="../../../style/style.css">
</head>
<body>
    <section class="header-container">
        <?php include __DIR__ . '/../../../headerfooter/header.php'?>
    </section>

    <div class="page-body">
        <section class="aside-container">
            <?php
            //Barra lateral
            include __DIR__ . '/asidesith.php'
            ?>
        </section>

        <main class="text-container">
            <section class="card-content">
                <h1>Atualizar Planeta</h1>
                <form action="" method="post">
                    <label for="id">ID: </label>
                    <input type="number" name="id" id="id" placeholder="Insira o ID para atualizar" required><br>
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" required><br>
                    <label for="hierarquia">Hierarquia: </label>
                    <input type="text" name="hierarquia" id="hierarquia"><br>
                    <label for="ano">Ano: </label>
                    <input type="text" name="ano" id="ano"><br>
                    <label for="url_image">Imagem em URL:</label>
                    <input type="text" name="url_image" id="url_image"><br>
                    <input type="submit" value="Atualizar">
                    <input type="reset" value="Limpar">
                </form>
                <?php
                    if($_SERVER['REQUEST_METHOD'] == "POST"){
                        atualizar_sith($conexao, $_POST['id'], $_POST['nome'], $_POST['hierarquia'], $_POST['ano'], $_POST['url_image']);
                    }
                ?>
            </section>
        </main>
    </div>

    <div>
        <section class="footer-container">
            <?php include __DIR__ . '/../../../headerfooter/footer.php'?>
        </section>
    </div>
</body>
</html>