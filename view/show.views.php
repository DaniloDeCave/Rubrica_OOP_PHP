<?php
    include '../public/template/header.lay.inc.php';
    include '../controller/RubricaController.php';  

?>

<h3>ECCO LA TUA RUBRICA</h3>

<?php

$rubrica = new RubricaController();
$rubrica->actionView();



?>











