<?php

try{

    $pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
    $db=new PDO('mysql:host=127.0.0.1; dbname=siteassurance','root','');
    $db->setAttribute(PDO::ATTR_CASE,PDO::CASE_LOWER);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e)
{
    die('Erreur :'.$e->getMessage());
}


?>