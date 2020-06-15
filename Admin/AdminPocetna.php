<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Kuharica</title>
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap-4.4.1.css" rel="stylesheet">
        <link href="bootstrap/css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- NAVIGACIJA -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <a class="navbar-brand" href="admin.php">
                <img src="bootstrap/img/hat.png" width="30" height="30" alt="logo" loading="lazy">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i> Menu </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                            <p class="dropdown-info text-info  ">&nbsp User: <?php echo $_COOKIE['korisnik']; ?></p>
                            <a class="dropdown-item" href="admin.php?a=unos">Dodaj novi recept</a>
                            <a class="dropdown-item" href="admin.php?a=my">Moji recepti</a>
                            <a class="dropdown-item" href="admin.php?a=auredi">Uredi tipove i vrste jela</a>
                            <a class="dropdown-item" href="admin.php?a=logout">Odjavi se</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        &nbsp;
<div class="container">
            <div class="row">
                <div class="container col-2">
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
                            <?php include ("$header.php"); ?>
                        </div>
                        <div class="card-body">
                            <?php include ("$template.php") ?>
                        </div>
                    </div>
                </div>
                <div class="container col-2">
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

        <script src="bootstrap/js/jquery-3.4.1.min.js "></script>
        <script src="bootstrap/js/popper.min.js "></script>
        <script src="bootstrap/js/bootstrap-4.4.1.js "></script>
    </body>