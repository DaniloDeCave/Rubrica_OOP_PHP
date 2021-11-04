<?php
    include '../public/template/header.lay.inc.php';
    ?>

<h3>RICERCA CONTATTO</h3>

<form action="../controller/siteController.php"method="post">
   
    <div>
        <label for="cog">Cognome : </label>
        <input type="text" name="cog">
    </div>
    <div>
    <button type="submit" name="button" value="search" >Ricerca</button>
    </div> 
</form>