
<!doctype html>
<body>
    <?php     try {
                                 $pdo = new PDO('mysql:host=127.0.0.1;dbname=lol', "root", "");
                            } catch (PDOException $e) {
                                echo $e->getMessage();}
                           
                            $querychamp = $pdo->prepare("SELECT id,name,role FROM champion");
                            $querychamp->execute();
                            $allchamp= $querychamp->fetchALL(PDO::FETCH_OBJ); 

                            ?>

<a class="btn-blue" href="Formulaire.php" class="nav-link">Ajouter un personnage</a>
<a class="btn-blue" href="showchamp.php" class="nav-link">Voir les personnages</a>

<form action='' method='post'>
 <ul>
   <?php foreach ($allchamp as $item) { ?>
   <li>
     <input type='checkbox' name='suppr' value='<?php echo $item->id; ?>' />
     <?php echo $item->name . ' ' . $item->role; ?>
   </li>
   <?php } ?>
 </ul>
 <div><input type='submit' value='supprimer' /></div>
</form>


<?php
if(isset($_POST['suppr'])){
    $Suppr="";
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    foreach ($_POST['suppr'] as $id) {
      $delete=$pdo->prepare("DELETE FROM champion WHERE id='".$id."'");

      $delete->execute();

    }
  
  }
  $requete = "SELECT * FROM champion";

  $allchamp = $pdo->query($requete)->fetchAll(PDO::FETCH_OBJ);

?>