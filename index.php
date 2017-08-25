<?php
// doc : https://github.com/bobthecow/mustache.php/wiki/Template-Loading

require('vendor/autoload.php');
$m = new Mustache_Engine([
    //Charger les fichiers.
    'loader' => new Mustache_Loader_filesystemLoader(dirname(__FILE__).'/template')
]);
//render, va venir remplacer la variable name ou venir charger la page que l'on lui préçise.
echo $m->render("index", [ 
'name' => "le monde"
]);
?>