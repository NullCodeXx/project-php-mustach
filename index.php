<?php
// doc : https://github.com/bobthecow/mustache.php/wiki/Template-Loading

require('vendor/autoload.php');
$m = new Mustache_Engine([
    //Charger les fichiers, nouvel object.
    'loader' => new Mustache_Loader_filesystemLoader(dirname(__FILE__).'/template',
     //Change extension.
     ['extension' => '.html']) 
]);
//render, va venir remplacer la variable name ou venir charger la page que l'on lui préçise.
echo $m->render("index", [ 
'name' => "Djaafar"
]);
?>