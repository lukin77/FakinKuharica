<?php
foreach ($recept as $v) {
?>
<p><a href="?a=recept&id=<?php echo $v->getId() ?> "> <?php echo $v->getNaslov() ?></a></p>
<p><?php echo $v->getTekstRecepta() ?> </p>
<?php } ?>
