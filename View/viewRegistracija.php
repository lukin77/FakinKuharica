<!DOCTYPE html>
<html lang="en">
<?php

?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kuharica</title>
    <!-- Bootstrap -->
    <link href="../bootstrap/css/bootstrap-4.4.1.css" rel="stylesheet">
    <link href="../bootstrap/css/style.css" rel="stylesheet">
</head>

<body>
<!-- NAVIGACIJA -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="../index.php">
            <img src="../bootstrap/img/hat.png" width="30" height="30" alt="logo" loading="lazy">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Početna</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="viewPrijava.php">Prijava</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="viewRegistracija.php">Registracija<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="jumbotron-fluid">
        <br>
        <h1 class="display-2 px-lg-5 font-weigh-normal">Dobrodošli na Kuharicu!</h1>
        <p class="lead pl-5 font-weight-normal">&nbsp&nbsp Web aplikacija za razmjenu recepata</p>
    </div>
     
<!-- OBRAZAC ZA PRIJAVU KORISNIKA -->
    <div class="container">
        <div class="row">
            <div class="col-sm">
            </div>
            
            <div class="col-sm">
                <div class="card border-light mb-3" style="max-width: 18rem;">
                <div class="card-header">Registracija</div>
                    <div class="card-body text-secondary">
                        <!-- doda metodu za <form> i akciju -->
                        <form method="POST" action="../Controller/register.php">
                                  <div class="form-group">
                                      <label for="exampleInputUsername"><h4 class="text-dark">Ime</h4></label>
                                      <input type="username" class="form-control" id="name" name="name">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputUsername"><h4 class="text-dark">Prezime</h4></label>
                                      <input type="username" class="form-control" id="lastname" name="lastname">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputUsername"><h4 class="text-dark">Korisničko ime</h4></label>
                                      <input type="username" class="form-control" id="username" name="username">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1"><h4 class="text-dark">Lozinka</h4></label>
                                    <input type="password" class="form-control" id="password" name="password">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1"><h4 class="text-dark">Ponovite lozinku</h4></label>
                                    <input type="password" class="form-control" id="password2" name="password2">
                                  </div>
                                  <div class="text-center">
                                      <button type="submit" class="btn btn-dark" name="reg_user" >Registracija</button>
                                  </div>               
                      </form>
                    </div>
                  </div>
          </div>
            
          <div class="col-sm">
          </div>           
        </div>       
    </div>






    <script src="../js/jquery-3.4.1.min.js "></script>
    <script src="../js/popper.min.js "></script>
    <script src="../js/bootstrap-4.4.1.js "></script>
</body>
