<html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
    <body>
        <h1>Ajouté un champion!</h1>
        <h2>Entrez les données demandées :</h2>
            <form name="inscription" method="post" action="#"> </br>
           Nom: <input type="text" name="nom"/> </br>
            </br>
            Role: <input type="text" name="role"/> </br>
            <input type="submit" name="valider" value="Valider">
            </form>
           
    </body>
</html>
 
<?php
/* Connexion à une base ODBC avec l'invocation de pilote */
$dsn = 'mysql:host=127.0.0.1;dbname=php';
$user = 'root';
$password = '';
 
try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
if (isset ($_POST['valider'])){
                $nom=$_POST['nom'];
                $role=$_POST['role'];
		echo $nom.' ajouté ! ';
                $dbh->exec("INSERT INTO champion(id,name,role) VALUES('','$nom','$role')");
	
            }
      }
?>
