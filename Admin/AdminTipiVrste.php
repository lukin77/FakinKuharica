<h1>Tipovi jela</h1>
<?php
foreach ($vrsta_tipa as $v) {    //vrsta_jela
    echo '<div clas="text-primary">' . $v->getNaziv();
    echo '&nbsp&nbsp&nbsp';
    echo '<a class="btn btn-outline-primary" href="admin.php?a=izbrisiTIP&id=' . $v->getId() . '" role="button">Izbrisi</a>';
    echo '</div>';
    echo '<br>';
}
?>
<div class="btn-group dropright">
    <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">+</button>
    <div class="dropdown-menu">
        <form method="POST" action="admin.php?a=unosTipJela">
            <div class="form-group dropdown-item">
                <label for="exampleInputUsername"><h4 class="text-dark">Naziv tipa jela</h4></label>
                <input type="text" class="form-control" id="username" name="nazivTipJela">
            </div>
            <div class="text-center dropdown-item">
                <button type="submit" class="btn btn-outline-primary">Dodaj</button>
            </div>
        </form>
    </div>
</div>
<hr>
<h1>Vrste jela</h1>
<?php
foreach ($vrsta_jela as $v) {
    echo '<div clas="text-primary">' . $v->getNaziv();
    echo '&nbsp&nbsp&nbsp';
    echo '<a class="btn btn-outline-primary" href="admin.php?a=izbrisiVRSTA&id=' . $v->getId() . '" role="button">Izbrisi</a>';
    echo '</div>';
    echo '<br>';
}
?>
<div class="btn-group dropright">
    <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">+</button>
    <div class="dropdown-menu">
        <form method="POST" action="admin.php?a=unosVrstaJela">
            <div class="form-group dropdown-item">
                <label for="exampleInputUsername"><h4 class="text-dark">Naziv vrste jela</h4></label>
                <input type="text" class="form-control" id="username" name="nazivVrstaJela">
            </div>
            <div class="text-center dropdown-item">
                <button type="submit" class="btn btn-outline-primary">Dodaj</button>
            </div>
        </form>
    </div>
</div>