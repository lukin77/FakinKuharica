<html>
    <div>
    <p><strong><?php echo $recept->getNaslov(); ?></strong></p>
    <p><?php echo $recept->getSastojci(); ?></p>
    <p><?php echo $recept->getTekstRecepta(); ?></p>
    <p><a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>">natrag...</a>
    <p>Objavljeno: <?php echo date('d.m.Y \u H:i',
	strtotime($recept->getDatum())); ?> 
	Pogleda: <?php echo $recept->getBrojPregleda(); ?></p>
    <hr>
    </div>
</html>