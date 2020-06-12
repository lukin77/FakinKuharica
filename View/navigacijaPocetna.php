<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <a class="navbar-brand" href="index.php">
        <img src="./bootstrap/img/hat.png" width="30" height="30" alt="logo" loading="lazy">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Početna<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i> Prijava </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                     <form method="POST" action="index.php?a=login">
                        <div class="form-group dropdown-item">
                            <label for="exampleInputUsername"><h4 class="text-dark">Korisničko ime</h4></label>
                            <input type="username" class="form-control" id="username" name="username">
                        </div>
                        <div class="form-group dropdown-item">
                            <label for="exampleInputPassword1"><h4 class="text-dark">Lozinka</h4></label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="text-center dropdown-item">
                            <button type="submit" class="btn btn-dark">Prijava</button>
                        </div>               
                    </form>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i> Registracija </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                    <form method="POST" action="index.php?a=register">
                    <div class="form-group dropdown-item">
                        <label for="exampleInputUsername"><h4 class="text-dark">Ime</h4></label>
                        <input type="username" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group dropdown-item">
                        <label for="exampleInputUsername"><h4 class="text-dark">Prezime</h4></label>
                        <input type="username" class="form-control" id="lastname" name="lastname">
                    </div>
                    <div class="form-group dropdown-item">
                        <label for="exampleInputUsername"><h4 class="text-dark">Korisničko ime</h4></label>
                        <input type="username" class="form-control" id="username" name="username">
                    </div>
                    <div class="form-group dropdown-item">
                        <label for="exampleInputPassword1"><h4 class="text-dark">Lozinka</h4></label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="form-group dropdown-item">
                        <label for="exampleInputPassword1"><h4 class="text-dark">Ponovite lozinku</h4></label>
                        <input type="password" class="form-control" id="password2" name="password2">
                    </div>
                    <div class="text-center dropdown-item">
                        <button type="submit" class="btn btn-dark" name="reg_user" >Registracija</button>
                    </div>               
                </form>
                </div>
            </li>
        </ul>
    </div>
</nav>