<?php
foreach ($recept as $v) {
?>
<h2> <?php echo $v->getNaslov() ?></h2>
<p><?php echo $v->getTekstRecepta() ?> </p>
<p><a href="?a=recept&id=<?php echo $v->getId() ?> "> Više.. </a></p>
<?php } ?>

