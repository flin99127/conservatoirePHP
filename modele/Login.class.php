<?php

class Login
{
    public static function recupJson()
    {
        $url = "https://franck-lin.efrei.me/Api-Conservatoire/identifiants";

        $html = file_get_contents($url);
        $json = json_decode($html, true);
      
        return $json;
    }
    public static function verifLogin($identifiant, $motDePasse, $json)
    {
        $res = false;

        foreach($json as $cpt)
        {
            $login = $cpt['0'];
            $mdp = $cpt['1'];
        }
        if($identifiant == $login && $motDePasse == $mdp)
        {
            $res = true;
        }
        return $res;
    }
}