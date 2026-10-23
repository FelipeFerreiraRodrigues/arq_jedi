<?php include __DIR__ . '/../../login/vefadm.php';
include __DIR__ . '/../../database/function.php'?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Especies</title>
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
            <section class="card-content">
                <h1>Atualizar Espécie</h1>
                <form action="" method="post">
                    <label for="id">ID: </label>
                    <input type="number" name="id" id="id" placeholder="Insira o ID para atualizar" required><br>
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" required><br>
                    <label for="origem">Origem: </label>
                    <input type="text" name="origem" id="origem"><br>
                    <label for="idade_max">Idade Máxima: </label>
                    <input type="int" name="idade_max" id="idade_max"><br>
                    <label for="url_image">Imagem em URL:</label>
                    <input type="text" name="url_image" id="url_image"><br>
                    <label for="sensitivo">Sensitivo: </label>
                    <input type="radio" name="sensitivo" id="sensitivo" value="true">
                    <label for="ativo">Sim </label>
                    <input type="radio" name="sensitivo" id="sensitivo" value="false">
                    <label for="sensitivo">Não </label><br>
                    <input type="submit" value="Atualizar">
                    <input type="reset" value="Limpar">
                </form>
                <?php
                if($_SERVER['REQUEST_METHOD'] == "POST"){
                    atualizar_esp($conexao, $_POST['id'], $_POST['nome'], $_POST['origem'], $_POST['idade_max'], $_POST['sensitivo'], $_POST['url_image']);
                }
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