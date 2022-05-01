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
                             Ajout d'une catégorie
                                .
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Ajouter une catégorie
                            </div>
                            <div class="card-body">
                                <table>
                                    <thead>
                                        <tr>
                                            <form methode="GET" action="gestionDemande.php">
                                            <th>Nom </th>
                                            <th><input type="text" name="nom" value="" /> </th>
                                            <th><input type="submit" name="add" value="Ajouter cette catégorie" /></th>
                                            </form>
                                        </tr>
                                    </thead>
                                    
                                   
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
               
                                <!-- fin contenu -->
                 
<?php
include("inc/bottom.php");
?>
