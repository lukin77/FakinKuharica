<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Kuharica</title>
        <!-- Bootstrap -->
        <link href="./bootstrap/css/bootstrap-4.4.1.css" rel="stylesheet">
        <link href="./bootstrap/css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- NAVIGACIJA -->
        <?php include ("$navigacija.php") ?>


        <?php include ("$upper_template.php") ?>

        <!-- OPIS APLIKACIJE I PODACI ZA PRIJAVU KORISNIKA -->    
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h4>Upute i opis aplikacije</h4>
                </div>
                <div class="card-body">
                    Početna stranica, uz ostale elemente, mora imati opis funkcija koje aplikacija nudi kao i
                    uputstva za njeno korištenje. Zbog lakšeg pregleda navedite korisnička imena i lozinke
                    za sve tipove korisnika koji se mogu koristiti Vašom web aplikacijom.
                    <br><br>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Username</th>
                                <th scope="col">Password</th>
                                <th scope="col">Tip korisnika</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">jlukin</th>
                                <td>123</td>
                                <td>Administrator</td>
                            </tr>
                            <tr>
                                <th scope="row">anovokmet</th>
                                <td>123</td>
                                <td>Korisnik</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="container col-2 ">
                    <div class="card text-center">
                        <div class="card-header">
                            <h5> VRSTE JELA: </h5>
                        </div>
                        <div class="card-body">
                            <?php include("$left_template.php") ?>
                        </div>
                    </div>
                </div>
                <div class="container col-8">
                    <div class="card">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs">
                                <li class="active">
                                    <a class="nav-link" href="index.php?order=r.br_pregleda">Pogledi</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="index.php?order=r.datum_objavljivanja">Datum</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <?php include ("$template.php") ?>
                        </div>
                    </div>
                </div>
                <div class="container col-2 ">
                    <div class="card text-center">
                        <div class="card-header">
                            <h5> TIP JELA: </h5>
                        </div>
                        <div class="card-body">
                            <?php include("$right_template.php") ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="./bootstrap/js/jquery-3.4.1.min.js "></script>
        <script src="./bootstrap/js/popper.min.js "></script>
        <script src="./bootstrap/js/bootstrap-4.4.1.js "></script>
    </body>