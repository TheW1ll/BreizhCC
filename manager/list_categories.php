<?php
include("inc/top.php");
?>
            
            <!--  debut contenu -->
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Catégories</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Catégories</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                Vous pouvez modifier ou supprimer une catégorie, dans cette partie.
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Catégories
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Numéro</th>
                                            <th>Nom</th>
                                            <th>Modifier</th>
                                            <th>Supprimer</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Numéro</th>
                                            <th>Nom</th>
                                            <th>Modifier</th>
                                            <th>Supprimer</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $reponse = $PDO->query('SELECT id,nomcateg  FROM categorie ');
                                        while ($save = $reponse->fetch()){

                                            echo "
                                        <tr>
                                            <td>".$save['id']."</td>
                                            <td>".$save['nomcateg']."</td>
                                            <td><a href=\"modif_categorie.php?idcat=".$save['id']."\">Modifier</a></td>
                                            <td><a href=\"gestionDemande.php?nomcategorie=".$save['nomcateg']."\">Supprimer</a></td>
                                           
                                            
                                          
                                        </tr>
                                         ";
                                        }
                                       ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>

                                <!-- fin contenu -->
              
               
<?php
include("inc/bottom.php");
?>
