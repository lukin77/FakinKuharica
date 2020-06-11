<?php
session_start();
require_once ('Controller/ManagerVrsta_jela.php');
//require_once ('Help/help.php');
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
    
    case 'dodajtip':    if(!$_POST){
                            $recept = new Recept($_GET['id']);
                            $navigacija = 'KnavigacijaPocetna';
                            $template = 'tip';
                            $vrsta_jela = $vjm->getVrsta_jela();
                            $left_template = 'View/prikazVrste_jela';
                            $vrsta_tipa = $vt->getTip();
                            $right_template = 'View/prikazTip';
                        }else{
                            $rm->ReceptTip($_GET['id'], $_POST['tip_jela']);
                            header("Location: korisnik.php");
                        }
                        break;
    
    
    case 'tip':         $navigacija = 'KnavigacijaPocetna';
                        $recept = $rm->getRecept('tip');
                        $template = 'View/pregled';
                        $vrsta_jela = $vjm->getVrsta_jela();
                        $left_template = 'View/prikazVrste_jela';
                        $vrsta_tipa = $vt->getTip();
                        $right_template = 'View/prikazTip';
                        break; 
      
    case 'vrsta_jela':  $navigacija = 'KnavigacijaPocetna';
                        $recept = $rm->getRecept('kategorija');
                        $template = 'View/pregled';
                        $vrsta_jela = $vjm->getVrsta_jela();
                        $left_template = 'View/prikazVrste_jela';
                        $vrsta_tipa = $vt->getTip();
                        $right_template = 'View/prikazTip';
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
                        $navigacija = 'KnavigacijaPocetna';
                        $template = 'urediRecept';
                        $vrsta_jela = $vjm->getVrsta_jela();
                        $left_template = 'View/prikazVrste_jela';
                        $vrsta_tipa = $vt->getTip();
                        $right_template = 'View/prikazTip';
                    }else{
                        $recept->setId($_GET['id']);
                        $recept->setNaslov($_POST['naslov']);
                        $recept->setAutor($_SESSION['userID']);
                        $recept->setSastojci($_POST['sastojci']);
                        $recept->setOpis($_POST['opis']);
                        $recept->setTekstRecepta($_POST['tekst_recepta']);
                        $recept->setVrstaJela($_POST['vrsta_jela']);
                        //$recept->setTip($_POST['tip_jela']);
                        $rm->update($recept);
                        //$rm->ReceptTip($_GET['id'], $_POST['tip_jela']);
                        header("Location: korisnik.php");
                        }
                        break;
    
    case 'unos' :   $navigacija = 'KnavigacijaUnos';
                    $template = 'unosRecept';
                    $vrsta_jela = $vjm->getVrsta_jela();
                    $left_template = 'View/prikazVrste_jela';
                    $vrsta_tipa = $vt->getTip();
                    $right_template = 'View/prikazTip';
                    break;
                    
    case 'create':  
                    $recept = new Recept(); 
                    $recept->setNaslov($_POST['naslov']);
                    $recept->setAutor($_SESSION['userID']);
                    $recept->setSastojci($_POST['sastojci']);
                    $recept->setOpis($_POST['opis']);
                    $recept->setTekstRecepta($_POST['tekst_recepta']);
                    $recept->setVrstaJela($_POST['vrsta_jela']);
                    $recept->setDatum(date("Y-m-d"));
                    $rm->create($recept);
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
                    $left_template = 'View/prikazVrste_jela';
                    $vrsta_tipa = $vt->getTip();
                    $right_template = 'View/prikazTip';
                    break;

    default : 
                    $navigacija = 'KnavigacijaPocetna';
                    $recept = $rm->getRecept();
                    $template = 'View/pregled';
                    $vrsta_jela = $vjm->getVrsta_jela();
                    $left_template = 'View/prikazVrste_jela';
                    $vrsta_tipa = $vt->getTip();
                    $right_template = 'View/prikazTip';
                    break;
}
include_once 'Korisnik/View/KprikazPocetne.php';
?>

