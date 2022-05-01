<?php
include("inc/top.php");

?>



            
            <!--  debut contenu -->
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Annonce</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Annonce</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                             Ajout d'une annonce
                                .
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Ajouter une annonce
                            </div>
                            <div class="card-body">
                                <form method="GET" action="add_annonce.php">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Titre </th>
                                            <th><input type="text" name="titre" value="" /> </th>
                                        </tr>
                                    </thead>
                                    <thead>
                                        <tr>
                                            <th>Description </th>
                                            <th><input type="text" name="description" value="" /> </th>
                                        </tr>
                                    </thead>
                                    <thead>
                                        <tr>
                                            <th>Prix </th>
                                            <th><input type="text" name="prix" value="" /> </th>
                                        </tr>
                                    </thead>

                                    <thead>
                                        <tr>
                                            <th>code Postal </th>
                                            <th><input type="text" name="codepostal" value="" /> </th>
                                        </tr>
                                    </thead>
                                    <thead>
                                        <tr>
                                            <th>categorie</th>
                                            <th>
                                                <select name="idcateg">
                                            <?php
                                          $reponse = $PDO->query('SELECT id,nomcateg  FROM categorie ');

                                          while ($donnee = $reponse->fetch()){
                                              echo "<option value=\"".$donnee['id']."\"> ".$donnee['id']."-".$donnee['nomcateg']." </option>";
                                              }
                                                ?>
                                                
                                                </select>
                                             </th>
                                        </tr>
                                    </thead>
                                    <thead>
                                        <tr>
                                            <th>Type </th>
                                            <th><input type="text" name="type" value="" /> </th>
                                        </tr>
                                    </thead>
                                    <thead>
                                        <tr>
                                            <th>Image </th>
                                            <th><input type="text" name="img" value="" /> </th>
                                        </tr>
                                    </thead>

                                    <thead>
                                        <tr>
                                            <th></th>
                                        <th><input type="submit" name="add" value="Ajouter une annonce" /></th>
                                        </tr>
                                    </thead>
                                   
                                </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
               
                                <!-- fin contenu -->
                  <?php
            if(isset($_GET['add'])){
                $requete1 = ("SELECT max(ida) AS nombre FROM annonce ");
                $reponse1=$PDO->query($requete1);
                     while ($donnee1 = $reponse1->fetch()){
                          $id0=$donnee1['nombre'];
                     }	
                     
                $requete2 = ("SELECT id FROM compte where email='".$_SESSION['email']."'");
                $reponse2=$PDO->query($requete2);
                while ($donnee2 = $reponse2->fetch()){
                     $idcompte=$donnee2['id'];
                }	

                $id1=$id0+1;

               /*
                echo $_GET['titre']."-";
                echo $_GET['description']."-";
                echo $_GET['prix']."-";
                echo $_GET['codepostal']."-";
                echo $_GET['idcateg']."-";
                echo $_GET['type']."-";
                echo $_SESSION['email']."-";
                echo $idcompte."-";
                */
               
    if(isset($_GET['img'])){
        $reponse1 = $PDO->query("INSERT INTO  annonce (ida,titre,description,prix,codepostal,idcateg,type,idCompte,img) 
        VALUES (".$id1.",'"
        .$_GET['titre']."','"
        .$_GET['description']."','"
        .$_GET['prix']."','"
        .$_GET['codepostal']."','"
        .$_GET['idcateg']."','"
        .$_GET['type']."','"
        .$idcompte."'"."','"
        .$_GET['img']."'
        ) ");
    }
    else{
        $reponse1 = $PDO->query("INSERT INTO  annonce (ida,titre,description,prix,codepostal,idcateg,type,idCompte,img) 
        VALUES (".$id1.",'"
        .$_GET['titre']."','"
        .$_GET['description']."','"
        .$_GET['prix']."','"
        .$_GET['codepostal']."','"
        .$_GET['idcateg']."','"
        .$_GET['type']."','"
        .$idcompte."'".",''
        ) ");
    }
    

              

           }
      ?> 
<?php
include("inc/bottom.php");
?>
