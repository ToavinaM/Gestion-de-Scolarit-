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
                            <h1 style="text-align: center;">Inserer Note </h1>
                            <!-- filtre -->
                            <div class="row">
                                <div class="col-md-6 bg-warnig">
                                    <form action="" method="POST">
                                        <select style="width:auto" class="form-select m-2 selectM">
                                            <option value="1">Classe</option>
                                            <option value="2">Terminal</option>
                                        </select>
                                        <select style="width:auto" class="form-select m-2 selectM">
                                            <option value="1">Sexe</option>
                                            <option value="2">Fille</option>
                                            <option value="2">Garçon</option>
                                        </select> 
                                        <button class="btn btn-success" style="margin-top:10px;margin-left:10px; padding:8px; width:80px">Valider</button>
                                    </form>
                                </div>
                                <div class="col-md-6 p-3">
                                    <nav aria-label="Page navigation example" style="float:right; margin-right:10px" >
                                        <ul class="pagination">
                                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <hr>
                            <!-- table -->
                            <div class="row p-2">
                                <div class="col-md-12 bg-warnig text-center">
                                    <table class="table">
                                        <thead class="thead-dark">
                                            <tr>
                                            <th scope="col">Nom</th>
                                            <th scope="col">Prenom</th>
                                            <th scope="col">Matricule</th>
                                            <th scope="col">Classe</th>
                                            <th scope="col">Ecolage</th>
                                            <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">Ranarilala</th>
                                                <td>Toavina Mario</td>
                                                <td>ETU000936</td>
                                                <td>Terminal</td>
                                                <td><span class="badge badge-success" style="width: 50px;">oui</span></td>
                                                <td><button type="button" class="btn btn-primary"><a href="detailEleve.php">Detail</a></button></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Ranarilala</th>
                                                <td>Toavina Mario</td>
                                                <td>ETU000936</td>
                                                <td>Terminal</td>
                                                <td><span class="badge badge-danger" style="width: 50px;">non</span></td>
                                                <td><button type="button" class="btn btn-primary"> <a href="detailEleve.php">Detail</a></button></td>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
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