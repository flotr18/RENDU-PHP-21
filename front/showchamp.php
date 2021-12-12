
<!doctype html>
<body>

<a class="btn-blue" href="Formulaire.php" class="nav-link">Ajouter un personnage</a>
<a class="btn-blue" href="supprimer.php" class="nav-link">Supprimer un personnage</a>


    <p>
    <?php
                              try {
                                 $pdo = new PDO('mysql:host=127.0.0.1;dbname=lol', "root", "");
                            } catch (PDOException $e) {
                                echo $e->getMessage();}
                           
                            $querychamp = $pdo->prepare("SELECT name,role FROM champion");
                            $querychamp->execute();
                            $allchamp= $querychamp->fetchALL(PDO::FETCH_OBJ);
            foreach ($allchamp as  $item)
            { ;
?>     
                        
                      
                                 <a >Nom : <?php echo  $item->name?> </a>
                                 <a>Role :<?php echo   $item->role?> </a>
                                 <?php echo '<br>' ?>
                               
         <?php } ?>                          
</p>
</body>
</html>