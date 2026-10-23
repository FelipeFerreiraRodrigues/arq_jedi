<?php require_once __DIR__ . '/../database/function.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <section class="header-container">
        <?php
        include __DIR__ . '/../headerfooter/header.php'
        ?>
    </section>

    <main class="text-container2">
        <section class="card-content">
            <h1>Cadastrar-se</h1>
            <form action="" method="post">
                <br><label for="email">Email:</label>
                <input type="text" name="email" id="email" required><br>
                <label for="passwd">Senha:</label>
                <input type="password" name="passwd" id="passwd" required><br>
                <input type="submit" value="Cadastrar">
                <input type="reset" value="Limpar">
            </form>
            <?php
            //Após o cadastro, chama função de cadastro, registrando o 
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                cadastraruser($conexao, $_POST['email'], $_POST['passwd']);
                //Joga o usuário de volta ao index
                header("Location: ../index.php");
                exit();
            }
            ?>
        </section>
    </main>

    <div>
        <section class="footer-container">
            <?php
            include __DIR__ . '/../headerfooter/footer.php'
            ?>
        </section>
    </div>
</body>
</html>