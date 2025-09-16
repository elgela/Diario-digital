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

function showStaff() {
  require_once 'templates/header.php';
?>
  <!-- main section -->
  <main class="container mt-5">
    <section class="staff">

      <h1>Staff del diario</h1>

      <ul>
        <li><a href="staff.php?name=marcelo">Marcelo Gelato</a></li>
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
<?php
  require_once 'templates/footer.php';
}

function showStaffById($id) {
  require_once 'templates/header.php';
  $staff = getStaffById($id);
?>
  <main class="container mt-5">
    <section class="staff">
      <h1 class="mb-5"><?php  ?></h1>
    </section>
  </main>
<?php
  require_once 'templates/footer.php';
}

function getStaffById($id) {

}
