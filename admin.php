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
 
Autentikacija::isAdmin();

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
    
    case 'my':
                        $recept = $rm->getRecept('my');
                        $template = 'View/pregled';
                        $vrsta_jela = $vjm->getVrsta_jela();
                        $left_template = 'View/prikazVrste_jela';
                        $vrsta_tipa = $vt->getTip();
                        $right_template = 'View/prikazTip';
                        $header = 'View/sortOdabrani';
                        break;
    
    case 'ocjeni':      $recept = new Recept($_GET['id']);
                        $ocjena = $_GET['ocjena'];
                        $recept->dodajOcjena($ocjena);
                        header('Location: admin.php?a=recept&id='.$_GET['id']);
                        break;
                    
    case 'unosVrstaJela': if(isset($_POST['nazivVrstaJela']) && !empty($_POST['nazivVrstaJela'])){
                            $novaVrsta = new Vrsta_jela();
                            $novaVrsta->setNaziv($_POST['nazivVrstaJela']);
                            $vjm->UnosVrstaJela($novaVrsta);
                            header("Location: admin.php");
                            break;
                          }else{
                            header("Location: admin.php");
                          }
    
    case 'unosTipJela':   if(isset($_POST['nazivTipJela']) && !empty($_POST['nazivTipJela'])){
                            $noviTip = new Tip();
                            $noviTip->setNaziv($_POST['nazivTipJela']);
                            $vt->UnosTipJela($noviTip);
                            header("Location: admin.php");
                            break;
                          }else{
                            header("Location: admin.php");
                          }
    
    case 'izbrisiVRSTA':  $vrsta = new Vrsta_jela($_GET['id']);
                          $vjm->DelVrstaJela($vrsta);
                          header("Location: admin.php");
                          break;
    
    
    
    case 'izbrisiTIP':    $tip = new Tip($_GET['id']);
                          $vt->DelTipJela($tip);
                          header("Location: admin.php");
                          break;
    
    
    
    case 'auredi':        $template = 'Admin/AdminTipiVrste';
                          $vrsta_jela = $vjm->getVrsta_jela();
                          $vrsta_tipa = $vt->getTip();
                          $left_template = 'View/prikazVrste_jela'; ;
                          $right_template = 'View/prikazTip';
                          $header = 'View/sortSvi';
                          break;
    
    case 'dodajtip':    if(!$_POST){
                            $recept = new Recept($_GET['id']);
                            $template = 'tip';
                            $vrsta_jela = $vjm->getVrsta_jela();
                            $left_template = 'View/prikazVrste_jela';
                            $vrsta_tipa = $vt->getTip();
                            $right_template = 'View/prikazTip';
                            $header = 'View/sortSvi';
                        }else{
                            $rm->ReceptTip($_GET['id'], $_POST['tip_jela']);
                            header("Location: admin.php");
                        }
                        break;
    
    
    case 'tip':         
                        $recept = $rm->getRecept('tip');
                        $template = 'View/pregled';
                        $vrsta_jela = $vjm->getVrsta_jela();
                        $left_template = 'View/prikazVrste_jela';
                        $vrsta_tipa = $vt->getTip();
                        $right_template = 'View/prikazTip';
                        $header = 'View/sortOdabrani';
                        break; 
      
    case 'vrsta_jela':
                        $recept = $rm->getRecept('kategorija');
                        $template = 'View/pregled';
                        $vrsta_jela = $vjm->getVrsta_jela();
                        $left_template = 'View/prikazVrste_jela';
                        $vrsta_tipa = $vt->getTip();
                        $right_template = 'View/prikazTip';
                        $header = 'View/sortOdabrani';
                        break;  
                    
    
    case 'izbrisi':
                    $recept = new Recept($_GET['id']);
                    $rm->delete($recept);
                    
                    header("Location: admin.php");
                    break;
    
    case 'uredi' :  
                    $recept = new Recept($_GET['id']);
                    if(!$_POST){
                        $template = 'Korisnik/View/urediRecept';
                        $vrsta_jela = $vjm->getVrsta_jela();
                        $left_template = 'View/prikazVrste_jela';
                        $vrsta_tipa = $vt->getTip();
                        $right_template = 'View/prikazTip';
                        $header = 'View/sortSvi';
                    }else{
                        $recept->setId($_GET['id']);
                        $recept->setNaslov($_POST['naslov']);
                        $recept->setAutor($_SESSION['userID']);
                        $recept->setSastojci($_POST['sastojci']);
                        $recept->setOpis($_POST['opis']);
                        $recept->setTekstRecepta($_POST['tekst_recepta']);
                        $recept->setVrstaJela($_POST['vrsta_jela']);
                        $rm->update($recept);
                        header("Location: admin.php");
                        }
                        break;
    
    case 'unos' :   
                    $template = 'Korisnik/View/unosRecept';
                    $vrsta_jela = $vjm->getVrsta_jela();
                    $left_template = 'View/prikazVrste_jela';
                    $vrsta_tipa = $vt->getTip();
                    $right_template = 'View/prikazTip';
                    $header = 'View/sortSvi';
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
                    header("Location: admin.php");
                    break;
                    
    
    case 'logout': $korisnik = new Autentikacija();
                   $korisnik->logout();
    
    case 'recept':
                    $recept = new Recept($_GET['id']);
                    $recept->povecajBrojPregleda();
                    $template = 'Admin/AdminRecept';
                    $vrsta_jela = $vjm->getVrsta_jela();
                    $left_template = 'View/prikazVrste_jela';
                    $vrsta_tipa = $vt->getTip();
                    $right_template = 'View/prikazTip';
                    $header = 'View/sortSvi';
                    break;

    default :
                    $recept = $rm->getRecept();
                    $template = 'View/pregled';
                    $vrsta_jela = $vjm->getVrsta_jela();
                    $left_template = 'View/prikazVrste_jela';
                    $vrsta_tipa = $vt->getTip();
                    $right_template = 'View/prikazTip';
                    $header = 'View/sortSvi';
                    break;
}
include_once 'Admin/AdminPocetna.php';
?>

