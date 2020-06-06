<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Kuharica</title>
        <!-- Bootstrap -->
        <link href="../../bootstrap/css/bootstrap-4.4.1.css" rel="stylesheet">
        <link href="../../bootstrap/css/style.css" rel="stylesheet">
    </head>
    <body>
        <!-- NAVIGACIJA -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="korisnik.php">
                <img src="bootstrap/img/hat.png" width="30" height="30" alt="logo" loading="lazy">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="korisnik.php">Početna</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="korisnik.php?a=dodaj">Dodaj novi recept<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="korisnik.php?a=logout">Odjavi se</a>
                    </li>                
                </ul>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-sm col-lg col-md col-xl">
                    <div class="card border-light mb-3">
                        <div class="card-header">Unos novog recepta</div>
                        <div class="card-body text-secondary">
                            <form method="POST" action="../../korisnik.php?a=unos">
                                <div class="form-group">
                                    <label for="exampleInputUsername"><h4 class="text-dark">Naslov</h4></label>
                                    <input type="text" class="form-control" id="naslov" name="naslov">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Sastojci</label>
                                    <textarea class="form-control" id="sastojci" name="sastojci" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Tekst Recepta</label>
                                    <textarea class="form-control" id="tekst_recepta" name="tekst_recepta" rows="5"></textarea>
                                </div>
                                <label><h3 class="text-dark">Vrsta jela</h3></label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="vrsta_jela" id="predjelo" value="1" >
                                    <label class="form-check-label" for="exampleRadios1">
                                        Predjelo
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="vrsta_jela" id="predjelo" value="2" >
                                    <label class="form-check-label" for="exampleRadios1">
                                        Glavno jelo
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="vrsta_jela" id="desert" value="3" >
                                    <label class="form-check-label" for="exampleRadios1">
                                        Desert
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="vrsta_jela" id="salata" value="4" >
                                    <label class="form-check-label" for="exampleRadios1">
                                        Salata
                                    </label>
                                </div>
                                <div class="text-center">
                                      <button type="submit" class="btn btn-dark">Unesi</button>
                                  </div> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <script src="../../bootstrap/js/jquery-3.4.1.min.js "></script>
            <script src="../../bootstrap/js/popper.min.js "></script>
            <script src="../../bootstrap/js/bootstrap-4.4.1.js "></script>
    </body>
</html>