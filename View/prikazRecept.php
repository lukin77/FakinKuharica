<html>
    <div>
    <p><h4><strong><?php echo $recept->getNaslov(); ?></strong></h4></p>
    <p><h5><strong>Sastojci:</strong></h5><?php echo $recept->getSastojci(); ?></p>
    <p><h5><strong>Recept:</strong></h5><?php echo $recept->getTekstRecepta(); ?></p>
    <p><u>Objavljeno</u>: <?php echo date_format(date_create($recept->getDatum()),'d-m-Y'); ?>&nbsp&nbsp&nbsp&nbsp&nbsp
    <u>Pogleda</u>: <?php echo $recept->getBrojPregleda(); ?>&nbsp&nbsp&nbsp&nbsp&nbsp
    <u>Autor</u>: <?php echo $recept->getImeAutora(); ?></p>   
    <hr>
    <p><a class="btn btn-primary" href="<?php echo $_SERVER['SCRIPT_NAME']; ?>">Natrag...</a></p>
    </div>
</html>