<?php
// il faut envoyer avec supprimer ou modifier le id 

require_once  'include/database.php';
// pour prendre un information de url GET

$id= $_GET['id'];
// on a juste stocker la requete dans un variable qui s'appelle sqlstate
$sqlState=$pdo->prepare(query:'DELETE FROM produit WHERE id=?');
// stocker le variable de execution de la requete dans la variable supprimer pour le tester apres 
$supprimer=$sqlState->execute([$id]);
header(header:'location:produits.php');
//if($supprimer){
//header(header:'location:catgories.php');
//}
//else{
  //  echo "Dtabase error";
//}


?>