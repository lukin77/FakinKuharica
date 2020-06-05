<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kuharica</title>
    <!-- Bootstrap -->
    <link href="../bootstrap/css/bootstrap-4.4.1.css" rel="stylesheet">
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
                <li class="nav-item">
                    <!-- Postaviti da link za odjavu bude desno? -->
                    <a class="nav-link" href="../Controller/logout.php">Odjava</a>
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
            <!--
            <h5>Podaci za prijavu u aplikaciju:</h5>
            <br>
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
                    <td>Autor</td>
                  </tr>
                  <tr>
                    <th scope="row">josip</th>
                    <td>123</td>
                    <td>Urednik</td>
                  </tr>
                </tbody>
              </table>
            -->
        </div>
    </div>
</div>
<br>


<div class="container">
    <div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <!-- OPCIJE SORTIRANJA PO BROJU PREGLEDA ILI OCJENAMA -->  
      <li class="nav-item">
        <a class="nav-link active text-dark" href="#">Broj pregleda</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-decoration-none text-dark" href="#">Ocjene</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <div class="row">
        <!-- VRSTE JELA (Predjelo, glavno jelo, salata, desert) -->
        <div class="col-3">VRSTE JELA:
            <table>
                <tr>
                    <td>
                        <?php// IspisvrstaJela() ?>
                    </td>
                </tr>
            </table>
        </div>
        
        <!-- RECEPTI -->
        <div class="col-9">
            
        </div>
    </div>
  </div>
</div>
</div>

<!--   
// OBRAZAC ZA PRIJAVU 
    <div class="container">
        <div class="row">
            <div class="col-sm">
            </div>
            
            <div class="col-sm">
                <div class="card border-light mb-3" style="max-width: 18rem;">
                <div class="card-header">Prijava</div>
                    <div class="card-body text-secondary">
                      <form>
                                  <div class="form-group">
                                      <label for="exampleInputUsername"><h4 class="text-dark">Korisničko ime</h4></label>
                                    <input type="username" class="form-control" id="username">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1"><h4 class="text-dark">Lozinka</h4></label>
                                    <input type="password" class="form-control" id="password">
                                  </div>
                                  <div class="text-center">
                                      <button type="submit" class="btn btn-dark">Prijava</button>
                                  </div>               
                      </form>
                    </div>
                  </div>
          </div>
            
          <div class="col-sm">
          </div>           
        </div>       
    </div>
--> 





    <script src="../bootstrap/js/jquery-3.4.1.min.js "></script>
    <script src="../bootstrap/js/popper.min.js "></script>
    <script src="../bootstrap/js/bootstrap-4.4.1.js "></script>
</body>