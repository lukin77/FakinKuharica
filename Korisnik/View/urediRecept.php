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
                <label><h3 class="text-dark">Vrsta jela</h3></label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="vrsta_jela" id="predjelo" value="1" >
                    <label class="form-check-label" for="exampleRadios1">
                        Predjelo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="vrsta_jela" id="predjelo" value="2" >
                    <label class="form-check-label" for="exampleRadios1">
                        Glavno jelo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="vrsta_jela" id="desert" value="3" >
                    <label class="form-check-label" for="exampleRadios1">
                        Desert
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="vrsta_jela" id="salata" value="4" >
                    <label class="form-check-label" for="exampleRadios1">
                        Salata
                    </label>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-dark">Unesi</button>
                </div> 
            </form>
        </div>
    </div>
</div>