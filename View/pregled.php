<?php
foreach ($recept as $r) {
    echo '<h3>'.$r->getNaslov().'</h3>';
    echo '<p>'.$r->getOpis().'</p>';
    echo '<p><a href="?a=recept&id='.$r->getId().'">Više..</a></p>';
    echo '<hr>';   
} 
?>

