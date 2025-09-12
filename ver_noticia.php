<?php
/**
*Esta pagina PHP muestra una noticia enviada por parametro GET desde la URL.
*
* Utiliza el arreglo $noticias compartido simulando registros que saldrian de una Base de Datos.
*/

require_once 'db_fake.php';

$fecha = new DateTime();

// verifico que venga el parámetro que espero desde la URL
if (!isset($_GET['id'])) {
  echo "<h1> Error! no se envio id de noticia </h1>";
  die();
}

// obtengo el parametro enviado (ver_noticia.php?id=<id_noticia>)
$id = $_GET['id'];

// valido id dentro del rango
if (!($id >= 0 && $id < count($noticias) && is_numeric($id))) {
  echo "<h1> Error! no se encuentra la noticia </h1>";
  die();
}

// obtengo la noticia
$noticia = $noticias[$id];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Diario Digital</title>
</head>
<body>
<!-- header section -->
    <?php
    require_once './templates/header.php';
    ?>

    <!-- main section -->
    <main class="container mt-5">
        <section class="noticia">
            <h1 class="mb-5"><?= $noticia->titulo ?></h1>
            <img class="noticia-image" src="<?= $noticia->imagen ?>" alt="">
            <p class="lead mt-3"><?= $noticia->subtitulo ?></p>
            <p class="lead mt-3"><?= $noticia->contenido ?></p>
            <img class="noticia-image" src="<?= $noticia->imagen2 ?>" alt="">
        </section>
    </main>

    <!-- footer section -->
    <?php
    require_once './templates/footer.php';
    ?>
</body>
</html>