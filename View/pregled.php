<?php
foreach ($recept as $r) {
?>
<h2> <?php echo $r->getNaslov() ?></h2>
<p><?php echo $r->getTekstRecepta() ?> </p>
<p><a href="?a=recept&id=<?php echo $r->getId() ?> "> Više.. </a></p>
<?php } ?>
