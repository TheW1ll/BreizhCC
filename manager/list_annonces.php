<?php
include("inc/top.php");
?>


            
            <!--  debut contenu -->
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Annonces</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Catégories</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                               Liste des annonces
                                .
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
                                        $reponse = $PDO->query('SELECT ida,titre  FROM annonce ');
                                        while ($donnee = $reponse->fetch()){

                                            echo "
                                        <tr>
                                            <td>".$donnee['ida']."</td>
                                            <td>".$donnee['titre']."</td>
                                            <td><a href=\"modif_annonce.php?ida=".$donnee['ida']."\">Modifier</a></td>
                                            <td><a href=\"controle.php?idannonce=".$donnee['ida']."\">Supprimer</a></td>
                                           
                                            
                                          
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
