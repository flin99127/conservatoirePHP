<?php
include "vue/header.php";
include "modele/monPdo.php";

if(isset($_SESSION['autorisation']))
{
    if($_SESSION['autorisation'] == 'ok')
    {
        $uc = 'admin';
    }
}

if(empty($_GET["uc"]))
{
    $uc = "connexion";
}
else
{
    $uc = $_GET["uc"];
}

switch($uc)
{
    case "connexion":
        include "vue/connexion.php";
        break;
    case "admin":
        include "controleur/controleurConnexion.php";
        break;
        
}

include "vue/footer.php";

