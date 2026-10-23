<?php include __DIR__ . '/../../login/vefuser.php';
include __DIR__ . '/../../database/function.php'?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Membros</title>
    <link rel="stylesheet" href="../../style/style.css">
</head>
<body>
    <section class="header-container">
        <?php
        //Aqui ficará o header da página
        include __DIR__ . '/../../headerfooter/header.php';
        ?>
    </section>

    <div class ="page-body">
        <main class="text-container2">
            <section class="card-content">
                <h2>Listagem de Membros</h2>
                <div class="user-list-section">
                    <hr>
                    <div class="user-list">
                        <?php
                        $usuarios = listuser($conexao);
                        foreach ($usuarios as $user) {
                            echo "<div class='user-card'>";
                            echo "<span class='user-id'><strong>ID: </strong> " . htmlspecialchars($user['id']) . "</span>";
                            echo "<br><span class='user-email'><strong>Email: </strong> " . htmlspecialchars($user['email']) . "</span>";
                            echo "</div>";
                        }
                        ?>
                        <a href="../membros.php">Retornar</a>
                    </div>
                </div>
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

