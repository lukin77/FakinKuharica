
<?php
foreach ($vrsta_jela as $v){
    echo '<p><a class="btn btn-outline-secondary btn-sm btn-block" href="?a=vrsta_jela&id='.$v->getId().'">'.$v->getNaziv().'</a></p>'; 
}
?>
