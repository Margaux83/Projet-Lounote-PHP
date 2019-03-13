<?php
session_start();
include('../app/connexionPDO.php');
$req = $bdd->prepare('SELECT mail, mdp, id FROM connexion WHERE mail = :mail AND mdp = :mdp');
$req->execute(array('mail' => $_POST['mail'], 'mdp' => $_POST['mdp']));
$result = $req->fetch();

if(empty($_POST['mail']) OR empty($_POST['mdp'])) {
    $_SESSION['message']='Erreur de champ';
    header('location: ../insco.php');
}
elseif ($result['mail'] == 'admin@admin.com' AND $result['mdp'] == 'admin') {
        setcookie('admin', $result['id'], time() + 3600, '/');
        header('location: ../index.php');
    }
elseif ($req->rowCount() == 1) {
    setcookie('id', $result['id'], time() + 3600, '/');
    $_SESSION['message']='Connexion reussi';
    header('location: ../index.php');
} else {
    $_SESSION['message']='Erreur de connexion';
    header('location: ../insco.php');
}
?>
