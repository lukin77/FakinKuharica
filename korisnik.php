<?php
session_start();
require_once ('Controller/ManagerVrsta_jela.php');
require_once ('Help/database.php');
require_once ('Model/ModelVrsta_jela.php');
require_once ('Model/ModelRecept.php');
require_once ('Controller/ManagerRecept.php');
require_once ('Controller/ManagerTip.php');
require_once ('Model/ModelTip.php');
require_once ('Model/Autentifikacija.php');
 
Autentikacija::logiran();

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
      
    case 'vrsta_jela':  $navigacija = 'KnavigacijaPocetna';
                        $recept = $rm->getRecept('kategorija');
                        $template = 'Kpregled';
                        $vrsta_jela = $vjm->getVrsta_jela();
                        $left_template = 'KprikazVrste_jela';
                        $vrsta_tipa = $vt->getTip();
                        $right_template = 'KprikazTip';
                        break;  
                    
    
    case 'izbrisi': 
                    $navigacija = 'KnavigacijaPocetna';
                    $recept = new Recept($_GET['id']);
                    $rm->delete($recept);
                    header("Location: korisnik.php");
                    break;
    
    case 'uredi' :  
                    $recept = new Recept($_GET['id']);
                    if(!$_POST){
                        $template = 'urediRecept';
                        $vrsta_jela = $vjm->getVrsta_jela();
                        $left_template = 'KprikazVrste_jela';
                        $vrsta_tipa = $vt->getTip();
                        $right_template = 'KprikazTip';
                    }else{
                        $recept->setId($_GET['id']);
                        $recept->setNaslov($_POST['naslov']);
                        $recept->setAutor($_SESSION['userID']);
                        $recept->setSastojci($_POST['sastojci']);
                        $recept->setTekstRecepta($_POST['tekst_recepta']);
                        $recept->setVrstaJela($_POST['vrsta_jela']);
                        $rm->update($recept);
                        header("Location: korisnik.php");
                    }
                    break;
    
    case 'unos' :   $navigacija = 'KnavigacijaUnos';
                    $template = 'unosRecept';
                    $vrsta_jela = $vjm->getVrsta_jela();
                    $left_template = 'KprikazVrste_jela';
                    $vrsta_tipa = $vt->getTip();
                    $right_template = 'KprikazTip';
                    break;
                    
    case 'create':  
                    $recept = new Recept();
                    $recept->setNaslov($_POST['naslov']);
                    $recept->setAutor($_SESSION['userID']);
                    $recept->setSastojci($_POST['sastojci']);
                    $recept->setTekstRecepta($_POST['tekst_recepta']);
                    $recept->setVrstaJela($_POST['vrsta_jela']);
                    $recept->setDatum(date("Y-m-d"));
                    $rm->create($recept);
                    //var_dump($recept);
                    header("Location: korisnik.php");
                    break;
                    
    
    case 'logout': $korisnik = new Autentikacija();
                   $korisnik->logout();
    
    case 'recept': 
                    $navigacija = 'KnavigacijaPocetna';
                    $recept = new Recept($_GET['id']);
                    $recept->povecajBrojPregleda();
                    $template = 'KprikazRecept';
                    $vrsta_jela = $vjm->getVrsta_jela();
                    $left_template = 'KprikazVrste_jela';
                    $vrsta_tipa = $vt->getTip();
                    $right_template = 'KprikazTip';
                    break;

    default : 
                    $navigacija = 'KnavigacijaPocetna';
                    $recept = $rm->getRecept();
                    $template = 'Kpregled';
                    $vrsta_jela = $vjm->getVrsta_jela();
                    $left_template = 'KprikazVrste_jela';
                    $vrsta_tipa = $vt->getTip();
                    $right_template = 'KprikazTip';
                    break;
}
include_once 'Korisnik/View/KprikazPocetne.php';
?>

