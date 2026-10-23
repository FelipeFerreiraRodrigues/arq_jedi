<?php include __DIR__ . '/../../login/vefadm.php';
include __DIR__ . '/../../database/function.php'?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Especies</title>
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
                <!--Formulário para cadastro-->
                <h1>Cadastrar Espécie</h1>
                <form action="" method="post" enctype="multipart/form-data">
                    <br><label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" required>
                    <br><label for="origem">Origem: </label>
                    <input type="text" name="origem" id="origem" required>
                    <br><label for="idade_max">Idade Máxima: </label>
                    <input type="int" name="idade_max" id="idade_max" required>
                    <br><label for="arch_image">Imagem em Arquivo: </label>
                    <input type="file" name="arch_image" id="arch_image" accept=""image/*>
                    <br><label for="url_image">Imagem em URL: </label>
                    <input type="text" name="url_image" id="url_image">
                    <br><label for="sensitivo">Sensitivo:</label><br>
                    <input type="radio" name="sensitivo" id="sensitivo" value="true" required>
                    <label for="sensitivo">Sim </label>
                    <input type="radio" name="sensitivo" id="sensitivo" value="false">
                    <label for="sensitivo">Não </label><br>
                    <br><input type="submit" value="Cadastrar">
                    <input type="reset" value="Limpar">
                    </form>

                    <?php
                    if($_SERVER['REQUEST_METHOD'] == "POST"){
                        $final_image = "";
                        //Precisa verificar se recebeu imagem em arquivo
                        if (isset($_FILES['arch_image']) && ($_FILES['arch_image']['error'] === UPLOAD_ERR_OK)) {
                            $pasta = "upload/";
                            //Criar pasta para os uploads
                            if (!is_dir($pasta)) {
                                mkdir($pasta, 0755, true);
                            }
                            //Evitar usar o mesmo nome de arquivo duas vezes
                            $extension = pathinfo($_FILES['arch_image']['name'], PATHINFO_EXTENSION);
                            $newname = uniqid("esp_") . "." . $extension;
                            $path = $pasta . $newname;
                            //Mover o arquivo para a pasta
                            if (move_uploaded_file($_FILES['arch_image']['tmp_name'], $path)) {
                                $final_image = $path;
                            }
                        }
                        //Se não tiver arquivo, verificar se tem URL
                        if (empty($final_image) && !empty($_POST['url_image'])) {
                            $final_image = trim($_POST['url_image']);
                        }

                        if (!empty($final_image)) {
                            create_esp($conexao, $_POST['nome'], $_POST['origem'], $_POST['idade_max'], $_POST['sensitivo'], $final_image);
                        } else {
                            echo "Envie um arquivo de imagem ou uma URL!";
                        }
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