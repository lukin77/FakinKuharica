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
                <div class="form-group">
                    <h3>Vrsta jela:</h3>
                    <?php ManagerVrsta_jela::IspisVrsta_jela()  ?>
                    <h3>Tip jela:</h3>
                    <?php ManagerTip::IspisTip() ?>
                </div>
            </div>
    </fieldset>
    <div class="text-center">
        <button type="submit" class="btn btn-dark">Unesi</button>
    </div> 
</form>