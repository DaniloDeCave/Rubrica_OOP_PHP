<?php
    include '../public/template/header.lay.inc.php';
    ?>

<h3>MODIFICA CONTATTO</h3>

<form action="../controller/siteController.php" method="post">
    <div>
        <label for="id">ID Contatto : </label>
        <input type="text" name="id">
    </div>
    <div>
        <label for="name">Nome : </label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="cog">Cognome : </label>
        <input type="text" name="cog">
    </div>
    <div>
        <label for="tel">Telefono : </label>
        <input type="text" name="tel">
    </div>
    <div>
    <button type="submit" name="button" value="update" >Salva Modifiche</button>
    </div> 
</form>