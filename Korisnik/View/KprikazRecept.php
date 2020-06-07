<html>
    <div>
    <p><strong><?php echo $recept->getNaslov(); ?></strong></p>
    <p><?php echo $recept->getSastojci(); ?></p>
    <p><?php echo $recept->getTekstRecepta(); ?></p>
    <p><a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>">Natrag...</a>
    <p><u>Objavljeno</u>: <?php echo date('d.m.Y \u H:i',
            strtotime($recept->getDatum())); ?>&nbsp&nbsp&nbsp&nbsp&nbsp
            <u>Pogleda</u>: <?php echo $recept->getBrojPregleda(); ?>&nbsp&nbsp&nbsp&nbsp&nbsp
            <u>Autor</u>: <?php echo $recept->getImeAutora(); ?></p>   
    <hr>
    <?php
    
    if($recept->getAutor() == $_SESSION['userID']){
        //korisnikov clanak
        echo '<a class="btn btn-primary" href="korisnik.php?a=uredi&id='.$recept->getId().'" role="button">Uredi</a>';
        echo '&nbsp&nbsp&nbsp';
        echo '<a class="btn btn-primary" href="korisnik.php?a=izbrisi&id='.$recept->getId().'" role="button">Izbrisi</a>';
    }elseif($_SESSION['vk_tip_korisnika'] == 1){
        //admin
        echo '<a class="btn btn-primary" href="korisnik.php?a=izbrisi&id='.$recept->getId().'" role="button">Izbrisi</a>';
    }
    
    
    ?>
    </div>
</html>