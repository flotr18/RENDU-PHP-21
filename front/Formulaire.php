<html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <a class="btn-blue" href="showchamp.php" class="nav-link">Voir les personnage</a>
    <body>
        <h1>Ajouté un champion!</h1>
        <h2>Entrez les données demandées :</h2>
            <form name="inscription" method="post" action="#"> </br>
           Nom: <input type="text" name="nom"/> </br>
            </br>
            Role: <input type="text" name="role"/> </br>
            <input type="submit" name="valider" value="Valider">
            </form>

            <?php 
         
            
            
            
            
            ?>
           
    </body>
</html>
 
<?php

$pdo= $pdo = new PDO('mysql:host=127.0.0.1;dbname=lol', "root", "");
 
try {
    new PDO('mysql:host=127.0.0.1;dbname=lol', "root", "");
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
if (isset ($_POST['valider'])){
                $nom=$_POST['nom'];
                $role=$_POST['role'];
		echo $nom.' ajouté ! ';
                $add=$pdo->prepare("INSERT INTO champion ( NAME ,ROLE ) VALUES('$nom','$role')");
                $add->execute();

	
            }
      
?>
   