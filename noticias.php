<?php
require_once 'db-fake.php';

function showNoticias() {
        require_once './templates/header.php';
    ?>
    <!-- main section -->
    <main class="container mt-5">
        <section class="noticias">

            <!-- noticias -->
            <?php foreach ($noticias as $key => $noticia) { ?>
                <div class="card">
                    <a href="noticias.php?id=<?= $key ?>"><img src="<?= $noticia->imagen ?>" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <a href="noticias.php?id=<?= $key ?>">
                            <h5 class="card-title"><?= $noticia->titulo ?></h5>
                        </a>
                        <p class="card-text"><?= $noticia->subtitulo ?></p>
                        <a href="noticias.php?id=<?= $key ?>" class="btn btn-outline-primary">Leer más</a>
                    </div>
                </div>
            <?php } ?>

        </section>
    </main>
    <?php
    require_once 'templates/footer.php';
}

function showNoticiasById($id) {
    require_once 'templates/header.php';
    $noticia = getNoticiasById($id);
    ?>
    <main class="container mt-5">
    <section class="noticia">
      <h1 class="mb-5"><?php echo $noticia->titulo ?></h1>
      <img class="noticia-image" src="<?php echo $noticia->imagen ?>" alt="...">
      <p class="lead mt-3"><?php echo $noticia->contenido ?></p>
    </section>
  </main>
  <?php
    require_once "templates/footer.php";
}
