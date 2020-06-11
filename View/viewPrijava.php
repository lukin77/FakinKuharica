
<!-- PODACI ZA PRIJAVU -->    
<div class="container">
    <div class="card">
        <div class="card-header">
            <h4>Podaci za prijavu u aplikaciju</h4>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        <th scope="col">Tip korisnika</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">jlukin</th>
                        <td>123</td>
                        <td>Administrator</td>
                    </tr>
                    <tr>
                        <th scope="row">anovokmet</th>
                        <td>123</td>
                        <td>Korisnik</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>
<br>
<!-- OBRAZAC ZA PRIJAVU KORISNIKA -->
<div class="container ">
    <div class="row ">
        <div class="col-sm col-lg col-md col-xl" >
            <div class="card border-light mb-3 " >
                <div class="card-header">Prijava</div>
                <div class="card-body text-secondary ">
                    <form method="POST" action="index.php?a=ulogiraj">
                        <div class="form-group">
                            <label for="exampleInputUsername"><h4 class="text-dark">Korisničko ime</h4></label>
                            <input type="username" class="form-control" id="username" name="username">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1"><h4 class="text-dark">Lozinka</h4></label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-dark">Prijava</button>
                        </div>               
                    </form>
                </div>
            </div>
        </div>
    </div>       
</div>
