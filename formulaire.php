<?php

$dsn = 'mysql:host=127.0.0.1;dbname=php';
$user = 'root';
$password = '';
 
try {
    $dbh = new PDO($dsn, $user, $password);
} catch (Exception $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
if (isset ($_POST['submit'])){
                $nom=$_POST['nom'];
                $birth=$_POST['role'];
                $dbh->exec("INSERT INTO champion(id,name,role) VALUES('','$firstname','$role')");
            }
?>