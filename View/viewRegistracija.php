<!-- OBRAZAC ZA PRIJAVU KORISNIKA -->
<div class="container">    
    <div class="col-sm col-lg col-md col-xl">
        <div class="card border-light mb-3">
            <div class="card-header">Registracija</div>
            <div class="card-body text-secondary">
                <!-- doda metodu za <form> i akciju -->
                <form method="POST" action="index.php?a=register">
                    <div class="form-group">
                        <label for="exampleInputUsername"><h4 class="text-dark">Ime</h4></label>
                        <input type="username" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername"><h4 class="text-dark">Prezime</h4></label>
                        <input type="username" class="form-control" id="lastname" name="lastname">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername"><h4 class="text-dark">Korisničko ime</h4></label>
                        <input type="username" class="form-control" id="username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"><h4 class="text-dark">Lozinka</h4></label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"><h4 class="text-dark">Ponovite lozinku</h4></label>
                        <input type="password" class="form-control" id="password2" name="password2">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-dark" name="reg_user" >Registracija</button>
                    </div>               
                </form>
            </div>
        </div>
    </div>        
</div>       
</div>
