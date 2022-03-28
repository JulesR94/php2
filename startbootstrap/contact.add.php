<?php

//var_dump($_POST);

if (!isset($_POST["name"])) {
   die("Nom obligatoire!"); 
}

if ($_POST["name"] == "") {
    die("Le nom doit contenir une valeur !");
}
if (strlen ($_POST["name"]) > 25) {
    die("Le nom doit être inférieur à 26 lettres !");
}

include("model/contact.add.model.php");

header("Location: index.php?notif=1");
exit;
