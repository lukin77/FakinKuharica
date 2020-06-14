
<?php
foreach ($vrsta_tipa as $v){    //vrsta_jela
    echo '<p><a href="?a=tip&id='.$v->getId().'">'.$v->getNaziv().'</a></p>'; 
}
?>
