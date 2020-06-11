<div class="card-header col-sm col-lg col-md col-xl">Dodaj tip recepta</div>
<div class="card-body text-dark ">
    <form method="POST" action="korisnik.php?a=dodajtip&id=<?php echo $recept->getId() ?>">
        <h3>Tip jela:</h3>
        <?php ManagerTip::IspisTip() ?>
        <div class="text-center">
            <button type="submit" class="btn btn-dark">Unesi</button>
        </div> 
    </form>
</div>
