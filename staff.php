<?php 

// arreglo asociativo para el staff
$staff = [
  'marcelo' => 'Marcelo Gelato',
  'abby' => 'Abby',
  'luli' => 'Luli'
];

// tomo el parámetro si existe
if (isset($_GET['name'])) {
  $staffName = $_GET['name'];
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>TUDAI - Diario Digital</title>
</head>
<body>

    <!-- main header -->
    <?php require_once './templates/header.php'; ?>

    <!-- main section -->
    <main class="container mt-5">
      <section class="staff">

        <h1>Staff del diario</h1>

        <ul>
          <li><a href="staff.php?name=marcelo">Marcelo Gelato</a> </li>
          <li><a href="staff.php?name=abby">Abby</a></li>
          <li><a href="staff.php?name=luli">Luli</a></li>
        </ul>

        <?php if (!empty($staffName)) { ?>
          <div>
            <h2><?= $staff[$staffName] ?></h2>
            <h3>Rol: Director</h3>
          </div>
        <?php  } ?>

      </section>
    </main>
    
    <!-- main footer -->
     <?php require_once './templates/footer.php'; ?>
  </body>
</html>
