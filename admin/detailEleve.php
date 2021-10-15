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
                                <img src="../assets/img/notif.png" width="30px" height="30px" alt="notification" style="margin-left: 20px;">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12 main">
                            <h1 style="text-align: center;">Détail &Eacute;lèves</h1>
                            <!-- filtre -->
                            <div class="row">
                                <div class="col-md-6 bg-warnig">
                                </div>
                                <div class="col-md-6 p-3">
                                    <nav aria-label="Page navigation example" style="float:right; margin-right:10px" >
                                        <ul class="pagination">
                                            <li class="page-item"><a class="page-link" href="#">Précédent</a></li>
                                          
                                            <li class="page-item"><a class="page-link" href="#">Suivant</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <hr>
                            <!-- table -->
                            <div class="row p-2">
                                <div class="col-md-12 bg-warnig">
                                    <section style="width: 50%;float:right">
                                        <div class="carte2">
                                            <!-- rang moyenne trimestre -->
                                            <table class="table">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th scope="col">Trimestre</th>
                                                        <th scope="col">Rang</th>
                                                        <th scope="col">Moyenne</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">I</th>
                                                        <td>2ème</td>
                                                        <td>16.7</td>
                                                        <td>
                                                            <a href="bulletin.php">
                                                                <button class="btn btn-info">Detail</button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">I</th>
                                                        <td>2ème</td>
                                                        <td>16.7</td>
                                                        <td>
                                                            <a href="bulletin.php">
                                                                <button class="btn btn-info">Detail</button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">I</th>
                                                        <td>2ème</td>
                                                        <td>16.7</td>
                                                        <td>
                                                            <a href="bulletin.php">
                                                                <button class="btn btn-info">Detail</button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                            <!-- retard etc -->
                                            <table class="table">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th scope="col">Libélé</th>
                                                        <th scope="col">I</th>
                                                        <th scope="col">II</th>
                                                        <th scope="col">II</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Retard</th>
                                                        <td>3</td>
                                                        <td>3</td>
                                                        <td>3</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Absence</th>
                                                        <td>3</td>
                                                        <td>3</td>
                                                        <td>3</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Sanction</th>
                                                        <td>3</td>
                                                        <td>3</td>
                                                        <td>3</td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <th scope="row">Bonus</th>
                                                        <td>3</td>
                                                        <td>3</td>
                                                        <td>3</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </section>
                                    <section style="width: 48%;">
                                        <div class="carte">
                                            <section class="p-2" style="width: 40%;float:right;">
                                                <img style="border:solid 1px;"class="mt-3 ml-5"src="../assets/img/profil.png" width="70%" height="70%" alt="">
                                            </section>
                                            <section style="width: 50%;">
                                                <h3 class="text-center p-2">Ranarilala Toavina</h3>
                                                <h4 class="text-center" >25 ans</h4>
                                                <div class="info p-2">
                                                    <p style="float: right;">Numeros: 66</p>
                                                    <p>Classe: Terminal</p>
                                                    <p>Matricule: ETU000936</p>
                                                    <p>Adresse: IIB 150 Mahalavolona</p>
                                                    <p>Nom du père:Ranarilala Donat</p>
                                                    <p>Contact: 034 95 069 19</p>
                                                    <p>Nom du père:Ranarilala Donat</p>
                                                    <p>Contact: 034 95 069 19</p>
                                                </div>
                                            </section>
                                        </div>
                                        <hr>
                                        <div class="btn text-center" style="width:100%">
                                            <button style="width:30%" class="btn btn-primary">Note</button>
                                            <button style="width:30%" class="btn btn-danger">Modifier</button>
                                            <button style="width:30%" class="btn btn-success">Ecolage</button>
                                        </div>
                                    </section>
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