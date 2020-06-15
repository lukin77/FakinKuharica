<?php
if(count($recept)== 0){
    echo '<h3 class="text-center">Još ne postoji takav recept! :)</h3>';
}
foreach ($recept as $r) {
    echo '<h3>'.$r->getNaslov().'</h3>';
    echo '<p>'.$r->getOpis().'</p>';
    echo '<p><a class="btn btn-outline-secondary" href="?a=recept&id='.$r->getId().'">Više..</a></p>';
    echo '<hr>';   
} 
?>

