<?php
require_once '../controller/RubricaController.php';

$rubrica = new RubricaController();

$button = $_POST['button'];

switch ($button) {
    case $button=='create':
        $rubrica->actionAdd($_POST['name'], $_POST['cog'], $_POST['tel']);
        break;

    case $button=='view':
        $rubrica->actionView();
        break;
    
    case $button=='search':
        $rubrica->actionSearch($_POST['cog']);
        break;

    case $button=='update':
        $rubrica->actionUpdate($_POST['id'],$_POST['name'], $_POST['cog'], $_POST['tel']);
        break;

    case $button=='delete':
        $rubrica->actionDelete($_POST['cog'], $_POST['tel']);
        break;
}


?>