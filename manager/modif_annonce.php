<?php
include("inc/top.php");

echo $_GET['ida'];
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
                             Modifier une annonce
                                .
                            </div>
                        </div>
                      
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Modifier une annonce
                            </div>
                            <div class="card-body">

                            
                                <table>
                                    <thead>
                                        <tr>
                                        <form method="GET" action="controle.php">
                                            <th>Nom </th>
                                            <th><input type="text" name="titre" value="" />  </th> 
                                            <th><input type="hidden" name="ida" value="<?php echo $_GET['ida'];?>" />  </th> 
                                            <th><input type="submit" name="update" value="Modifier cette catégorie" /></th>
                                         
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
