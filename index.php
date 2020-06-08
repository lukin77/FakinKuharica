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
    
    case 'prijava': 
                    $upper_template='viewPrijava';
                    $recept = $rm->getRecept();
                    $template = 'pregled';
                    $vrsta_jela = $vjm->getVrsta_jela();
                    $left_template = 'prikazVrste_jela';
                    $vrsta_tipa = $vt->getTip();
                    $right_template = 'prikazTip';
                    break;
    
    case 'ulogiraj':
                    $korisnik = new Autentikacija();
                    $korisnik->login();
                    break;
                    
                    

    case 'recept': 
                    $recept = new Recept($_GET['id']);
                    $recept->povecajBrojPregleda();
                    $template = 'prikazRecept';
                    $vrsta_jela = $vjm->getVrsta_jela();
                    $left_template = 'prikazVrste_jela';
                    $vrsta_tipa = $vt->getTip();
                    $right_template = 'prikazTip';
                    break;

    default :       
                    $upper_template = 'jumbotron';
                    $recept = $rm->getRecept();
                    $template = 'pregled';
                    $vrsta_jela = $vjm->getVrsta_jela();
                    $left_template = 'prikazVrste_jela';
                    $vrsta_tipa = $vt->getTip();
                    $right_template = 'prikazTip';
                    break;
}
include_once './View/prikazPocetne.php';
?>

