<html>
    <div>
        <p><h4><strong><?php echo $recept->getNaslov(); ?></strong></h4></p>
    <p><h5><strong>Sastojci:</strong></h5><?php echo $recept->getSastojci(); ?></p>
<p><h5><strong>Recept:</strong></h5><?php echo $recept->getTekstRecepta(); ?></p>
<p><u>Objavljeno</u>: <?php echo date_format(date_create($recept->getDatum()), 'd-m-Y'); ?>&nbsp&nbsp&nbsp&nbsp&nbsp
    <u>Pogleda</u>: <?php echo $recept->getBrojPregleda(); ?>&nbsp&nbsp&nbsp&nbsp&nbsp
    <u>Autor</u>: <?php echo $recept->getImeAutora(); ?> &nbsp&nbsp&nbsp&nbsp&nbsp
    <u>Ocjena</u>: <?php echo floatval($recept->getOcjena()/$recept->getBrOcjena()); ?></p>   
<hr>
<p>
    <?php
    if (isset($_SESSION)) {
        if ($recept->getAutor() == $_SESSION['userID']) {
            //korisnikov clanak

            echo '<a class="btn btn-primary" href="korisnik.php?a=uredi&id=' . $recept->getId() . '" role="button">Uredi</a>';
            echo '&nbsp&nbsp&nbsp';
            echo '<a class="btn btn-primary" href="korisnik.php?a=dodajtip&id=' . $recept->getId() . '" role="button">Dodaj tip</a>';
            echo '&nbsp&nbsp&nbsp';
            echo '<a class="btn btn-primary" href="korisnik.php?a=izbrisi&id=' . $recept->getId() . '" role="button">Izbrisi</a>';
            echo '&nbsp&nbsp&nbsp';
        }
        echo '<div class="btn-group dropup">
        <button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ocjeni</button>
        <div class="dropdown-menu">
        <a class="btn btn-outline-primary" href="korisnik.php?a=ocjeni&ocjena=1&id='.$recept->getId().'">1</a>
        <a class="btn btn-outline-primary" href="korisnik.php?a=ocjeni&ocjena=2&id='.$recept->getId().'">2</a>
        <a class="btn btn-outline-primary" href="korisnik.php?a=ocjeni&ocjena=3&id='.$recept->getId().'">3</a>
        <a class="btn btn-outline-primary" href="korisnik.php?a=ocjeni&ocjena=4&id='.$recept->getId().'">4</a>
        <a class="btn btn-outline-primary" href="korisnik.php?a=ocjeni&ocjena=5&id='.$recept->getId().'">5</a>
        </div>
        </div>';
    }
    ?>

    <a class="btn btn-primary" href="<?php echo $_SERVER['SCRIPT_NAME']; ?>">Natrag...</a></p>
</div>
</html>