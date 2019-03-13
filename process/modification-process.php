<?php
include('../app/connexionPDO.php');
$id=$_COOKIE['id'];
$reponse=$bdd->query("SELECT id FROM connexion WHERE id = $id");
if($donnee=$reponse->fetch())
{
    $reponseInfo=$bdd->prepare("UPDATE connexion SET mail = :mail, mdp = :mdp WHERE id = $id");
    $reponseInfo->execute(array(
            'mail' => $_POST['mail'],
            'mdp' => $_POST['mdp'],));
    header('location: ../membre.php');
$reponse->closeCursor();
$reponseInfo->closeCursor();
}
else
header('location: index.php');
?>