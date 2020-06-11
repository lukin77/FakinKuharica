<?php
foreach ($recept as $r) {
?>
<h3> <?php echo $r->getNaslov() ?></h3>
<p><?php echo $r->getOpis() ?> </p>
<p><a href="?a=recept&id=<?php echo $r->getId() ?> "> Više.. </a></p>
<hr>
<?php } ?>

