<?php
require_once('../Help/database.php');
$c = kuharica_baza::connect();


if(!isset($_POST)){
    
    header("Location:  ../View/viewPrijava.php");
    
}else{
    // PRISTUPNI PODACI
    $username = $_POST['username'];
    //$password = md5($_POST['password']); zasad bez enkripcije
    $password = $_POST['password'];

    // PRIPREMI I IZVRŠI UPIT
    $upit = "SELECT * FROM korisnik WHERE username='$username' AND password = '$password' LIMIT 1";
    $r = $c->query($upit);
    // JE LI PRONAĐEN?
    if($r && $r->num_rows==1)
    {
            //postavi sesion
            session_start();
            $row = $r->fetch_assoc();
            $_SESSION['userID'] = $row['id'];
            $_SESSION['login'] = $username;
            $_SESSION['vk_tip_korisnika'] = $row['vk_tip_korisnika'];
            var_dump($_SESSION);
            switch($row['vk_tip_korisnika'])
            {
                //vk_tip_korisnika u nasoj bazi je:
                // 1 -> admin
                // 2 -> korisnik
                                    //treba dodati adminski dio
                    case 1:  header("Location: ../View/viewAdmin.php"); break;
                    case 2:  header("Location: ../korisnik.php"); break;
                    default: header("Location: ../index.php");
            }
    }
    else
    {
            header("Location:  ../View/ViewPrijava.php");
    }
}

?>
