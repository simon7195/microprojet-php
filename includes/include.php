<?php
// données de connexion à la base de données
define("HOTE","localhost");
define ("BASE","microprojet") ;
define ("USER","root") ;
define ("PASSWD","") ;

//chargement automatique de classes
//plus d'infos : http://php.net/manual/fr/function.spl-autoload-register.php
spl_autoload_register(function ($class) {
 include 'classes/' . $class . '.php';
});