<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecionar Grupo</title>
    <link rel="stylesheet" href="../../style/style.css">
</head>
<body>
    <section class="header-container">
        <?php
        include __DIR__ . '/../../headerfooter/header.php'
        ?>
    </section>

    <div class="page-body">
        <section class="aside-container">
            <a href="../grupos.php">Voltar</a>
        </section>

        <main class="text-container2">
            <section class="card-content">
                <h2>Mandalorianos</h2>
                <img src="../../imagens/mando2.jpg" alt="Mandalorianos" width=450px>
                <br><a href="mando/mando.php">Os Mandalorianos</a>
            </section>

            <section class="card-content">
                <h2>Ordem Sith</h2>
                <img src="../../imagens/sith.jpg" alt="Ordem Sith" width=450px>
                <br><a href="sith/start.php">Ir a lista de Siths - CRUD</a>
            </section>
        </main>
    </div>

    <div>
        <section>
           <?php
           include __DIR__ . '/../../headerfooter/footer.php'
           ?>
        </section>
    </div>
</body>
</html>