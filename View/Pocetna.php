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
                    <p class="text-dark">
                        Web aplikaciju Kuharicu tj. objavljene recepte mogu pregledavati svi korisnici, bili oni registrirani ili ne. Početna stranica prikazuje sve recepte koje je
                        moguće sortirati prema datumu objavljivanja ili broju pogleda. Isto tako, korisnik recepte može pretraživati po njihovoj vrsti (predjelo, glavno jelo, itd.) te 
                        po njihovom tipu (slano, slatko, itd.).
                        <br><br>
                        Ono što je još moguće na Početnoj je prikazati svaki recept zasebno; na naslovnici je prikazan samo naslov recepta tj. naziv jela te njegov kratak opis kojemu je
                        cilj privući Korisnike, a otvaranjem recepta klikom na 'Više' Korisniku su vidljivi sastojci, proces pripreme jela te kada je objavljen, tko ga je i kada objavio uz 
                        naravno ocjenu koju može dodijeliti samo ako je registriran.
                        <br><br>
                        Korisnik se može registrirati putem padajućeg linka u navigaciji, a istim se putem linkom pored može i prijaviti. Prijavljenom Korisniku nude se nove mogućnosti:
                        navigacijska traka se mijenja tako što se u gornjem desnom kutu nalazi padajući izbornik 'Menu' gdje je navedeno ime i prezime prijavljenog Korisnika kao i linkovi
                        koji vode na dodavanje novog recepta, pregled svih recepata koje je korisnik objavio te link na odjavu korisnika.
                        <br><br>
                        U obrascu za dodavanje novog recepta Korisnik upisuje naziv recepta, njegove sastojke, opis koji će se jedini prikazati uz naslov na početnoj stranici, tekst recepta tj.
                        proces izrade jela te odabire vrstu jela. Isto tako, pri unosu mu se napominje da ako želi, kasnije receptu može dodati jedan ili više tipova jela kako bi Korisnicima bilo
                        lakše pretraživati recepte.
                        <br>
                        Prijavljen Korisnik također može ući u pregled bilo kojeg recepta te ga ocijeniti, a ako uđe u pregled nekog svog recepta, on ga može urediti ili obrisati te mu dodati tip 
                        (je li to slano jelo, slatko ili više njih odjednom).
                        <br><br>
                        Ukoliko se na sjedište prijavi Administrator, njegove su mogućnosti jednake kao i korisnikove, a ono što on dodatno može je urediti tipove i vrste jela tj. obrisati 
                        već postojeće ili dodati nove (npr. hladno predjelo, slatko-kiselo jelo) te uz to može uređivati i brisati sve tuđe recepte.
                        <br><br>
                    <h5>Podaci za prijavu Korisnika i Administratora:</h5>
                    </p>
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
                           <?php include ("$header.php"); ?>
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