<?php
require_once ('Controller/ManagerVrsta_jela.php');
require_once ('Help/database.php');
require_once ('Model/ModelVrsta_jela.php');
require_once ('Model/ModelRecept.php');
require_once ('Controller/ManagerRecept.php');
require_once ('Controller/ManagerTip.php');
require_once ('Model/ModelTip.php');
require_once ('Model/Autentifikacija.php');


$c = kuharica_baza::connect();
$rm = new ManagerRecept();
$vjm = new ManagerVrsta_jela();
$vt = new ManagerTip();
$km = new Autentikacija();

if (!isset($_GET['a'])) {
    $a = '';
} else {
    $a = $_GET['a'];
}

switch ($a) {
    
    case 'tip':         $navigacija = 'navigacijaPocetna';
                        $upper_template = 'jumbotron';
                        $recept = $rm->getRecept('tip');
                        $template = 'pregled';
                        $vrsta_jela = $vjm->getVrsta_jela();
                        $left_template = 'prikazVrste_jela';
                        $vrsta_tipa = $vt->getTip();
                        $right_template = 'prikazTip';
                        $header = 'sortOdabrani';
                        break; 
    
    case 'vrsta_jela':  $navigacija = 'navigacijaPocetna';
                        $upper_template = 'jumbotron';
                        $recept = $rm->getRecept('kategorija');
                        $template = 'pregled';
                        $vrsta_jela = $vjm->getVrsta_jela();
                        $left_template = 'prikazVrste_jela';
                        $vrsta_tipa = $vt->getTip();
                        $right_template = 'prikazTip';
                        $header = 'sortOdabrani';
                        break;
    
    case 'register':$navigacija = 'navigacijaPocetna';
                    $upper_template='jumbotron';
                    $recept = $rm->getRecept();
                    $template = 'pregled';
                    $vrsta_jela = $vjm->getVrsta_jela();
                    $left_template = 'prikazVrste_jela';
                    $vrsta_tipa = $vt->getTip();
                    $right_template = 'prikazTip';
                    $header = 'sortSvi';
                    
                    $korisnik = new Autentikacija();
                    $korisnik->register();
                    if(!empty($korisnik->message)){
                        $poruka = implode(" ", $korisnik->message);
                        echo '<div class="alert alert-primary" role="alert">'. $poruka .'</div>';
                    }else{
                        $korisnik->login();
                        break;
                    }
                    break;

    
    case 'login':
                    $korisnik = new Autentikacija();
                    $korisnik->login();
                    break;
                    
                    

    case 'recept': 
                    $upper_template = 'jumbotron';
                    $navigacija = 'navigacijaPocetna';
                    $recept = new Recept($_GET['id']);
                    $recept->povecajBrojPregleda();
                    $template = 'prikazRecept';
                    $vrsta_jela = $vjm->getVrsta_jela();
                    $left_template = 'prikazVrste_jela';
                    $vrsta_tipa = $vt->getTip();
                    $right_template = 'prikazTip';
                    $header = 'sortSvi';
                    break;

    default :       
                    $navigacija = 'navigacijaPocetna';
                    $upper_template = 'jumbotron';
                    $recept = $rm->getRecept();
                    $template = 'pregled';
                    $vrsta_jela = $vjm->getVrsta_jela();
                    $left_template = 'prikazVrste_jela';
                    $vrsta_tipa = $vt->getTip();
                    $right_template = 'prikazTip';
                    $header = 'sortSvi';
                    break;
}
include_once './View/Pocetna.php';
?>

