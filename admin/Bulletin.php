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
                            <h1 style="text-align: center;">Bulletin</h1>
                            <!-- filtre -->
                            <div class="row">
                                <div class="col-md-6 text-center">
                                    <nav aria-label="Page navigation example" >
                                        <ul class="pagination">
                                            <li class="page-item"><a class="page-link" href="#">Précédent</a></li>
                                          
                                            <li class="page-item"><a class="page-link" href="#">Suivant</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="col-md-6 pr-4">
                                   <button  class="btn btn-success" style="float:right">Imprimer</button>
                                </div>
                            </div>
                            <hr>
                            <!-- table -->
                            <div class="row p-2">
                                <div class="col-md-12">
                                    <div class="bulletin">
                                        <p>Nom : Ranarilala Toavina</p>
                                        <p style="float: right; margin-right:60%">Numéros : 66</p>
                                        <p>Classe de: Terminal</p>
                                        <div class="row p-2">
                                            <div class="col-md-12  ">
                                                <table class="table text-center">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                        <th scope="col">Matière</th>
                                                        <th scope="col">Coéfficient</th>
                                                        <th scope="col">DS</th>
                                                        <th scope="col">Exam</th>
                                                        <th scope="col">Moyenne avec coefficient</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Malagasy</th>
                                                            <td>3</td>
                                                            <td>30</td>
                                                            <td>27</td>
                                                            <td>28,5</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Malagasy</th>
                                                            <td>3</td>
                                                            <td>30</td>
                                                            <td>27</td>
                                                            <td>28,5</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Malagasy</th>
                                                            <td>3</td>
                                                            <td>30</td>
                                                            <td>27</td>
                                                            <td>28,5</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Malagasy</th>
                                                            <td>3</td>
                                                            <td>30</td>
                                                            <td>27</td>
                                                            <td>28,5</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Malagasy</th>
                                                            <td>3</td>
                                                            <td>30</td>
                                                            <td>27</td>
                                                            <td>28,5</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Malagasy</th>
                                                            <td>3</td>
                                                            <td>30</td>
                                                            <td>27</td>
                                                            <td>28,5</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Malagasy</th>
                                                            <td>3</td>
                                                            <td>30</td>
                                                            <td>27</td>
                                                            <td>28,5</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p>TOTAL DES NOTES  :   230, 37 / 360</p>
                                                <p>MOYENNE GENERALE : 12, 80 / 20</p>
                                                <p>RANG             : 6 / 25</p>

                                            </div>
                                        </div>
                                    </div>
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