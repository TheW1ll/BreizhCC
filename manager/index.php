<?php
include("inc/top.php");

//Nombre de categorie
$requete = ("SELECT count(*) AS nombre FROM categorie ");
$reponse = $PDO->query($requete);
while ($donnee = $reponse->fetch()) {
    $retour = $donnee['nombre'];
}

//Nombre d'annonce
$requete1 = ("SELECT count(*) AS nombre1 FROM annonce ");
$reponse1 = $PDO->query($requete1);
while ($donnee1 = $reponse1->fetch()) {
    $retour1 = $donnee1['nombre1'];
}

//Nombre de compte
$requete2 = ("SELECT count(*) AS nombre2 FROM compte ");
$reponse2 = $PDO->query($requete2);
while ($donnee2 = $reponse2->fetch()) {
    $retour2 = $donnee2['nombre2'];
}

//Nombre de client
$requete3 = ("SELECT count(*) AS nombre3 FROM clients ");
$reponse3 = $PDO->query($requete3);
while ($donnee3 = $reponse3->fetch()) {
    $retour3 = $donnee3['nombre3'];
}

?>



<!--  debut contenu -->
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">Membres :<?php echo " ".$retour2; ?> </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="list_membres.php">En savoir plus</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">Catégories :<?php echo " ".$retour; ?></div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="list_categories.php">En savoir plus</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">Annonces:<?php echo " ".$retour1; ?></div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="list_annonces.php">En savoir plus</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body">Contact :<?php echo " ".$retour3; ?> </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="list_contacts.php">En savoir plus</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">



        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Membres enregistrés
            </div>
            <div class="card-body">
                <table id="datatablesSimple">

                    <thead>

                        <tr>

                            <th>Nom</th>

                            <th>Email</th>

                            <th>Adresse</th>

                            <th>Ville</th>

                        </tr>

                    </thead>

                    <tfoot>


                        <tr>

                            <th>Nom</th>

                            <th>Email</th>

                            <th>Adresse</th>

                            <th>Ville</th>

                        </tr>

                    </tfoot>
                    <tbody>
                        <?php
                        $requete5 = ("SELECT * FROM compte ");
                        $reponse5 = $PDO->query($requete5);
                        while ($donnee5 = $reponse5->fetch()) {

                            echo "
                        <tr>
                   
                            <th>" . $donnee5['nom'] . "</th>

                            <th>" . $donnee5['email'] . "</th>

                            <th>" . $donnee5['rue'] . "</th>

                            <th>" . $donnee5['ville'] . "</th>

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