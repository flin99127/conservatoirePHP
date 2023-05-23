<?php

if(isset($_GET['choix']))
{
    $choix = $_GET['choix'];
}

if(isset($_POST['login']) && isset($_POST['mdp']))
{
    $login = $_POST['login'];
    $mdp = $_POST['mdp'];
}

switch($choix)
{
    case "formulaire":
        include "vue/headerAccueil.php";
        break;

    case "verif":

        /*$req = admin::verifier($_POST["login"], md5($_POST["mdp"]));

        if($req == true)
        {*/
            $_SESSION["autorisation"] = "ok";
            include("vue/headerAccueil.php");
            include("vue/accueil.php");
        /*}
        else
        {
            include("vue/echecRecherche.php");
        }*/
        break;
    
    case "accueilEleve":
        include("vue/headerAccueil.php");
        include("vue/eleve.php");
        break;


    case "ajoutEleve":
        include("modele/Personne.class.php");
        include("modele/Eleve.class.php");

        if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['tel']) && isset($_POST['mail']) && isset($_POST['adresse']) && isset($_POST['niveau']) && isset($_POST['bourse']))
        {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $tel = $_POST['tel'];
            $mail = $_POST['mail'];
            $adresse = $_POST['adresse'];
            $niveau = $_POST['niveau'];
            $bourse = $_POST['bourse'];

            Personne::insertPersonne($nom, $prenom, $tel, $mail, $adresse);

            $id = Personne::getLastId();
            $niveau = $_POST['niveau'];
            $bourse = $_POST['bourse'];

            Eleve::insertEleve($id, $niveau, $bourse);

            include("vue/reussite.php");
        }
        else
        {
            include("vue/echec.php");
        }
        break;

        case "accueilInsciption":
            include("vue/headerAccueil.php");

            include("modele/Eleve.class.php");
            include("modele/Prof.class.php");

            $lesEleve = Eleve::afficherTous();
            $lesProf = Prof::afficherTous();

            include("vue/inscription.php");
            break;

        case "inscription":
            include("modele/Seance.class.php");

            if(isset($_POST['prof']) && isset($_POST['eleve']))
            {
                $hprof = $_POST['prof'];
                $heleve = $_POST['eleve'];

                $lesSeance = Seance::afficherProf($hprof);
                
                include("vue/headerAccueil.php");
                include("vue/inscription2.php");
            }
            break;
        
        case "inscription2":
            include("modele/Inscription.class.php");
            include("modele/Seance.class.php");

            if(isset($_POST['prof']) && isset($_POST['eleve']) && isset($_POST['seance']))
            {
                $prof = $_POST['prof'];
                $eleve = $_POST['eleve'];
                $seance = $_POST['seance'];

                $capacite = Seance::afficherCapacite($seance);

                if(Inscription::verifierCapacite($seance, $capacite))
                {
                    Inscription::insertInscription($prof, $eleve, $seance);

                    include("vue/reussite.php");
                }
                else
                {
                    include("vue/echec.php");
                }
            }

            break;
}
