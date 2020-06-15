<?php
foreach ($vrsta_tipa as $v){    //vrsta_jela
    echo '<p><a class="btn btn-outline-secondary btn-sm btn-block" href="?a=tip&id='.$v->getId().'">'.$v->getNaziv().'</a></p>'; 
}
?>
