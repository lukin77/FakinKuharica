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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="viewIndex.php">
            <img src="../bootstrap/img/hat.png" width="30" height="30" alt="logo" loading="lazy">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="viewIndex.php">Početna<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="jumbotron-fluid">
        <br>
        <h1 class="display-2 px-lg-5 font-weigh-normal">Dobrodošli na Kuharicu!</h1>
        <p class="lead pl-5 font-weight-normal">&nbsp&nbsp Web aplikacija za razmjenu recepata</p>
    </div>
    
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
    </div>
</div>
<br>
  <div class="card-body">
    <div class="row">
        <!-- VRSTE JELA (Predjelo, glavno jelo, salata, desert) -->
        <div class="col-3">VRSTE JELA:
            <table>
                <tr>
                    <td>
                        <?php include("$right_template.php") ?>
                    </td>
                </tr>
            </table>
        </div>
        
        <!-- RECEPTI -->
        <div class="col-9">
            <table>
                <tr>
                    <td>
                        <?php include ("$template.php")   ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
  </div>



    <script src="./bootstrap/js/jquery-3.4.1.min.js "></script>
    <script src="./bootstrap/js/popper.min.js "></script>
    <script src="./bootstrap/js/bootstrap-4.4.1.js "></script>
</body>