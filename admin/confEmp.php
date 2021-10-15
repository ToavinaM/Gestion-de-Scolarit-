<?php $jours = array('Lundi','Mardi', 'Mecredi', 'Jeudi', 'Vendredi', 'Samedi');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('head.php')?>
</head>
<body>
    <div class="fluid-container">
        <div class="app h-100">
            <div class="row h-100">
                <!-- nav -->
                <div class="col-md-3">
                    <?php include('nav.php')?>
                </div>
                <!-- <-content> -->
                <div class="col-md-9 ">
                    <!-- header -->
                    <div class="row">
                        <div class="col-md-2 bg-warning">
                            <div class="header">
                                logo
                            </div>
                        </div>
                        <div class="col-md-9 bg-warning">
                            <div class="header">
                                <input type="text">
                                <button class="btn-success">Rechercher</button>
                            </div>
                        </div>
                        <div class="col-md-1 bg-warning">
                            <div class="header">
                                <img src="assets/img/notif.png" width="30px" height="30px" alt="notification" style="margin-left: 20px;">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12 main">
                            <h1 style="text-align: center;">Configuration Emp Classe</h1>
                            <!-- filtre -->
                            <div class="row">
                                <div class="col-md-6 text-center">
                                    <nav aria-label="Page navigation example" >
                                        <select style="width:auto" class="form-select m-2 selectM">
                                                        <option value="1">Classe</option>
                                                        <option value="2">Terminal</option>
                                        </select>
                                    </nav>
                                </div>
                                <div class="col-md-6 pr-4">
                                   <button  class="btn btn-success" style="float:right">Imprimer</button>
                                </div>
                            </div>
                            <hr>
                            <!-- table -->
                            <div class="row">
                                <div class="conf text-center" style="margin: auto;">
                                    <form action="Emp.php" method="POST">
                                            <table class="table">
                                                <thead class="thead-dark">
                                                    <tr>
                                                    <th scope="col">Jour</th>
                                                    <th scope="col">Nombre de matière</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach($jours as $jour) { ?>
                                                    <tr>
                                                        <th scope="row"><?= $jour ?></th>
                                                        <td><input type="number" min=0 value="2"></td>
                                                    </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                            <button class="btn btn-success">Valider</button>
                                    </form>                    
                                </div>

                            </div>
                        </div>
                        <!-- <div class="col-md-2 bg-success"></div> -->

                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>