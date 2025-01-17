<form method="POST" action="korisnik.php?a=create">
    <div class="form-group">
        <label for="exampleInputUsername"><h4 class="text-dark">Naslov:</h4></label>
        <input type="text" class="form-control" id="naslov" name="naslov">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Sastojci:</label>
        <textarea class="form-control" id="sastojci" name="sastojci" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea2">Opis:</label>
        <textarea class="form-control" id="opis" name="opis" rows="2"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea3">Tekst Recepta:</label>
        <textarea class="form-control" id="tekst_recepta" name="tekst_recepta" rows="5"></textarea>
    </div>
    <fieldset class="form-group">
        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <h3>Vrsta jela:</h3>
                    <?php ManagerVrsta_jela::IspisVrsta_jela()  ?>
                    <!--<h3>Tip jela:</h3>-->
                    <?php //ManagerTip::IspisTip() ?> 
                </div>
            </div>
            <div class="col">
                <div class="alert alert-secondary" role="alert">
                    <h4 class="alert-heading">Napomena</h4>
                    <p>Nakon unosa recepta svome jelu možete dodati oznake okusa kako bi ga bilo još lakše pronaći!</p>
                    <hr>
                    <p class="mb-0">Vrlo je jednostavno! Klikom na 'Dodaj tip' kod uređivanja recepta. :)</p>
                </div>
            </div>
    </fieldset>
    <div class="text-center">
        <p><button type="submit" class="btn btn-dark">Unesi</button>
        <button class="btn btn-dark" href="<?php echo $_SERVER['SCRIPT_NAME']; ?>">Natrag...</button></p>
    </div> 
</form>