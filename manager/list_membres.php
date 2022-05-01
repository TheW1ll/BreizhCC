<?php
include("inc/top.php");
?>


            
            <!--  debut contenu -->
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Membres</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Membres</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                La liste des membres de BreizhCoinCoin
                                .
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Membres
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
