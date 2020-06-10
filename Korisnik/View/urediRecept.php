<div class="col-sm col-lg col-md col-xl">
    <div class="card border-light ">
        <div class="card-header">Uredi recept</div>
        <div class="card-body text-secondary">
            <form method="POST" action="korisnik.php?a=uredi&id=<?php echo $recept->getId()?>">
                <div class="form-group">
                    <label for="exampleInputUsername"><h4 class="text-dark">Naslov</h4></label>
                    <input type="text" class="form-control" id="naslov" name="naslov" value="<?php echo $recept->getNaslov() ?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Sastojci</label>
                    <textarea class="form-control" id="sastojci" name="sastojci" rows="3"><?php echo $recept->getSastojci() ?></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Tekst Recepta</label>
                    <textarea class="form-control" id="tekst_recepta" name="tekst_recepta" rows="5"><?php echo $recept->getTekstRecepta() ?></textarea>
                </div>
                <h3>Vrsta jela:</h3>
                    <?php ManagerVrsta_jela::IspisVrsta_jela()  ?>
                <h3>Tip jela:</h3>
                    <?php ManagerTip::IspisTip() ?>
                <div class="text-center">
                    <button type="submit" class="btn btn-dark">Unesi</button>
                </div> 
            </form>
        </div>
    </div>
</div>