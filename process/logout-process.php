<?php
session_start();
session_unset();
session_destroy();
setcookie('id', $donnee['id'], time()-1, '/');
setcookie('admin', $donnee['admin'], time()-1, '/');


$_SESSION['message']='Deconnexion effectue avec succes';
header('location: ../index.php');
?>
