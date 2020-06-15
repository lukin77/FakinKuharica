<div class="card-body text-dark ">
    <form method="POST" action="korisnik.php?a=dodajtip&id=<?php echo $recept->getId() ?>">
        <h3>Tip jela:</h3>
        <?php ManagerTip::IspisTip() ?>
        <div class="text-center">
            <button type="submit" class="btn btn-dark">Unesi...</button>
            <!-- NE RADI<button class="btn btn-dark" href="<?php echo $_SERVER['SERVER_NAME']; ?>">Natrag...</button>-->
        </div> 
    </form>
</div>
