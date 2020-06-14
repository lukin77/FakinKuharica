
<?php
foreach ($vrsta_jela as $v){
    echo '<p><a  href="?a=vrsta_jela&id='.$v->getId().'">'.$v->getNaziv().'</a></p>'; 
}
?>
