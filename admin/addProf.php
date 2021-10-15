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
                <div class="col-md-9">
                    
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
                        <div class="col-md-12 bg-warning">
                            <h1 style="text-align: center;">Ajouter Professeur</h1>
                            <div class="row">
                                <div class="col-md-12 bg-info">
                                as
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 bg-warnig text-center">
                                    <form action="" method="POST">
                                        <section style="width:30%; float:right">
                                            <!-- <h3>Père</h3> -->
                                            <input style="width:80%" type="text" placeholder="Nom du Père" class="form-control m-2" required>
                                            <input style="width:80%" type="text" placeholder="Proféssion" class="form-control m-2" required>
                                            <input style="width:80%" type="text" placeholder="Contact" class="form-control m-2" required>
                                        </section>
                                        <section style="width:30%; float:right">
                                        <!-- <h3>Mère</h3> -->
                                            <input style="width:80%" type="text" placeholder="Nom de Mère" class="form-control m-2" required>
                                            <input style="width:80%" type="text" placeholder="Proféssion" class="form-control m-2" required>
                                            <input style="width:80%" type="text" placeholder="Contact" class="form-control m-2" required>
                                        </section>
                                        <section style="width:40%">
                                        <!-- <h3>Information de l'élève</h3> -->

                                                <input style="width:60%" type="text" placeholder="Nom" class="form-control m-2" required>
                                                <input style="width:60%" type="text" placeholder="Prénom" class="form-control m-2" required>
                                                <input style="width:60%" type="date" placeholder="Date de naissance" class="form-control m-2" required>
                                                
                                                <select style="width:auto" class="form-select m-2 selectM">
                                                    <option value="1">Garcon</option>
                                                    <option value="2">Fille</option>
                                                </select>
                                                <select style="width:auto" class="form-select m-2 selectM">
                                                    <option value="1">Classe</option>
                                                    <option value="2">Terminal</option>
                                                </select>
                                                
                                                <input style="width:60%;clear:both;" type="text" placeholder="Adresse" class="form-control m-2" required>
                                                <div class="mb-3" style="margin-left:8px">
                                                    <input style="width:61%;clear:both;" class="form-control" type="file" id="formFile">
                                                </div>
                                        </section>
                                        <section>
                                            <button type="button" class="btn btn-success">Success</button>
                                        </section>

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