<?php 

//var_dump($_POST);

//Ouverture de connexion a la BDD assurance

$ObjPdo = new PDO('mysql:host=localhost;dbname=assurance','root','');

//preparation de la requête d'insertion

$PdoStat = $ObjPdo->prepare('INSERT INTO contacts Values(NULL, :nom, :prenom, :nume, :email)');

//Lier chaque marqueur a une valeur

$PdoStat->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
$PdoStat->bindValue(':prenom', $_POST['prenom'], PDO::PARAM_STR);
$PdoStat->bindValue(':nume', $_POST['nume'], PDO::PARAM_STR);
$PdoStat->bindValue(':email', $_POST['email'], PDO::PARAM_STR);

//execution de la reqête preparer()

 $insertIsOk = $PdoStat->execute();

 if($insertIsOk)
 {
         $message='Vous êtes ajouté proprement';
 }else{
         $message='echec d\'inscription '
 }

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Document</title>
 </head>
 <body>
         <h1>Insertion du contact</h1>

         <p><?php echo $message; ?></p>
 </body>
 </html>
