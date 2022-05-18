<?php

class Router {
    // le / correspond à l'accueil (valeur par défaut)
    public function dispatch(string $uri = '/'){
        // var_dump("Mon URI est: $uri");
        
        // on enregistre la position du ? si il existe
        $position = strpos($uri, '?');
        if($position){
            $uri = substr($uri, 0, $position);
        }
        // echo '<br>';
        // var_dump($uri);

        // si uri est différent de l'accueil
        if($uri !== '/'){
            // récupère le dernier caractère de l'URI
            $lastChar = substr($uri,-1, iconv_strlen($uri));

            // var_dump($lastChar);

            if($lastChar === '/'){
                // iconv_strlen — Retourne le nombre de caractères d'une chaîne
                $uri = substr($uri, 0, iconv_strlen($uri)-1);
                // echo '<br>';
                // var_dump($uri);
            }
        }

        // Chargement du fichier de configuration des routes
        require_once '../config/routes.php';
    }
}