<html>
    <div>
    <p><strong><?php echo $recept->getNaslov(); ?></strong></p>
    <p><?php echo $recept->getSastojci(); ?></p>
    <p><?php echo $recept->getTekstRecepta(); ?></p>
    <p><a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>">Natrag...</a>
    <p><u>Objavljeno</u>: <?php echo $recept->getDatum(); ?>&nbsp&nbsp&nbsp&nbsp&nbsp
            <u>Pogleda</u>: <?php echo $recept->getBrojPregleda(); ?>&nbsp&nbsp&nbsp&nbsp&nbsp
            <u>Autor</u>: <?php echo $recept->getImeAutora(); ?></p>   
    <hr>
    </div>
</html>