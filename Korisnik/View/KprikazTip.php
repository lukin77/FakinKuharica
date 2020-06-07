<?php
foreach ($vrsta_tipa as $v){    //vrsta_jela
    echo '<p><a href="?a=vrsta_tipa&id='.$v->getId().'">'.$v->getNaziv().'</a></p>'; 
}

