<?php 

require_once('../Help/database.php');
$c = kuharica_baza::connect();
$message = array();

if(!isset($_POST)){
    header('Location: ../View/viewRegistracija.php');
}else{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $ime = $_POST['name'];
    $prezime = $_POST['lastname'];
    
    if(empty($username)){ 
        echo '<div class="alert alert-primary" role="alert"> Potrebno je korisnicko ime </div><br>'; 
        header('Refresh:3; url=../View/viewRegistracija.php');
    }
    if(empty($ime)){echo 'Potrebno je ime'.'<br>'; header('Refresh:3; url=../View/viewRegistracija.php');}
    if(empty($prezime)){echo 'Potrebno je prezime'.'<br>'; header('Refresh:3; url=../View/viewRegistracija.php');}
    if(empty($password)){echo 'Potrebna je lozinka'.'<br>'; header('Refresh:3; url=../View/viewRegistracija.php');}
    if($password != $password2){
        echo 'Lozinke nisu iste'.'<br>'; header('Refresh:3; url=../View/viewRegistracija.php');;
    }
}

?>
