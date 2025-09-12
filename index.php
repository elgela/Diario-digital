<?php

/**
 * Esta pagina PHP muestra el home de noticias cargadas dinamicamente.

 * Utiliza el arreglo $noticias compartido simulando registros que saldrian de una Base de Datos.
 */

require_once 'db_fake.php';

$fecha = new DateTime();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Diario Digital</title>
</head>

<body>
    <?php
    require_once './templates/header.php';
    ?>
    <!-- main section -->
    <main class="container mt-5">
        <section class="noticias">

            <!-- noticias -->
            <?php foreach ($noticias as $key => $noticia) { ?>
                <div class="card">
                    <a href="ver_noticia.php?id=<?= $key ?>"><img src="<?= $noticia->imagen ?>" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <a href="ver_noticia.php?id=<?= $key ?>">
                            <h5 class="card-title"><?= $noticia->titulo ?></h5>
                        </a>
                        <p class="card-text"><?= $noticia->subtitulo ?></p>
                        <a href="ver_noticia.php?id=<?= $key ?>" class="btn btn-outline-primary">Leer más</a>
                    </div>
                </div>
            <?php } ?>

        </section>
    </main>
    <!-- footer section -->
    <?php
    require_once './templates/footer.php'
    ?>

</body>

</html>