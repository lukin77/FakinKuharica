<form method="POST" action="korisnik.php?a=create">
    <div class="form-group">
        <label for="exampleInputUsername"><h4 class="text-dark">Naslov</h4></label>
        <input type="text" class="form-control" id="naslov" name="naslov">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Sastojci</label>
        <textarea class="form-control" id="sastojci" name="sastojci" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Tekst Recepta</label>
        <textarea class="form-control" id="tekst_recepta" name="tekst_recepta" rows="5"></textarea>
    </div>
    <fieldset class="form-group">
        <div class="row">
            <div class="col-sm-10">
                <div class=""
                     <legend class="text-dark col-form-label col-sm-2 pt-0"><h3>Vrsta jela</h3></legend>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="vrsta_jela" id="gridRadios1" value="1">
                        <label class="form-check-label" for="gridRadios1">Predjelo</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="vrsta_jela" id="gridRadios2" value="2">
                        <label class="form-check-label" for="gridRadios2">Glavno jelo</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="vrsta_jela" id="gridRadios3" value="3">
                        <label class="form-check-label" for="gridRadios3">Desert</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="vrsta_jela" id="gridRadios4" value="3">
                        <label class="form-check-label" for="gridRadios4">Salata</label>
                    </div>
                </div>
            </div>
    </fieldset>
    <div class="text-center">
        <button type="submit" class="btn btn-dark">Unesi</button>
    </div> 
</form>