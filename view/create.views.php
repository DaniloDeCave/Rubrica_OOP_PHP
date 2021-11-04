<?php
    include '../public/template/header.lay.inc.php';

?>
<h3>INSERISCI UN NUOVO CONTATTO</h3>
<form action="../controller/siteController.php" method="post">
    <div>
        <label for="name">nome : </label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="cog">Cognome : </label>
        <input type="text" name="cog">
    </div>
    <div>
        <label for="tel">telefono : </label>
        <input type="text" name="tel">
    </div>
    <div>
        <button type="submit" name="button" value="create" >Inserisci</button>
    </div> 
</form>