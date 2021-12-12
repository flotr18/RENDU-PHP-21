<?php


$pdo = new PDO('mysql:host=127.0.0.1;dbname=lol', "root", "");

try{
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=lol', "root", "");
} catch (Exception $e){
    echo " Erreur ";
}



$a = $pdo->prepare("CREATE TABLE champion(
        ID INT PRIMARY KEY AUTO_INCREMENT,
        NAME VARCHAR(255),
        ROLE VARCHAR(255))");
$a->execute();




?>

