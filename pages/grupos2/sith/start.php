<?php include __DIR__ . '/../../../login/vefadm.php';
include __DIR__ . '/../../../login/confidencial.php';
include __DIR__ . '/../../../database/function.php'?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arquivos Ordem Jedi</title>
    <link rel="stylesheet" href="../../../style/style.css">
</head>
<body>
    <section class="header-container">
        <?php
        //Aqui ficará o header da página
        include __DIR__ . '/../../../headerfooter/header.php';
        ?>
    </section>

    <div class="page-body">
        <section class="aside-container">
            <?php
            //Aqui ficará a barra de navegação lateral
            include __DIR__ . '/asidesith.php'
            ?>
        </section>

        <main class="text-container">
            <section class="card-content">
                <!--Aqui será uma espécie de "Sobre nós"-->
                <h2>AVISO - ALTO RISCO</h2>
                <img src="../../../imagens/ordem_sith.jpg" alt="Regra de Dois" width="500px">
                <p>Os Arquivos aqui presentes se tratam de membros da perigosa e corrupta Ordem Sith, estudar sobre quaisquer técnicas utilizadas pelos mesmos pode ser extremamente perigoso, siga por sua conta e risco
                </p>
                <a href="?off_conf=1">Sair do Modo Confidencial</a> 
            </section>
        </main>
    </div>

    <div>
        <section class="footer-container">
            <?php
            //Aqui ficará o footer da pagina
            include __DIR__ . '/../../../headerfooter/footer.php';
            ?>
        </section>
    </div>

</body>
</html>