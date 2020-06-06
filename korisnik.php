<?php
session_start();
require_once ('Controller/ManagerVrsta_jela.php');
require_once ('Help/database.php');
require_once ('Model/ModelVrsta_jela.php');
require_once ('Model/ModelRecept.php');
require_once ('Controller/ManagerRecept.php');
$c = kuharica_baza::connect();
$rm = new ManagerRecept();
$vjm = new ManagerVrsta_jela();
if (!isset($_GET['a'])) {
    $a = '';
} else {
    $a = $_GET['a'];
}

switch ($a) {
    case 'dodaj' :   header("Location: Korisnik/View/unosRecept.php"); break;
    
    case 'unos' :   $recept = new Recept();
                    $recept->setNaslov($_POST['naslov']);
                    $recept->setAutor($_SESSION['userID']);
                    $recept->setSastojci($_POST['sastojci']);
                    $recept->setTekstRecepta($_POST['tekst_recepta']);
                    $recept->setVrstaJela($_POST['vrsta_jela']);
                    $rm->create($recept);
                    header("Location: korisnik.php");
                    break;
                    
    
    case 'logout': 
                    header("Location: Controller/logout.php");
    
    case 'recept': 
                    $recept = new Recept($_GET['id']);
                    $recept->povecajBrojPregleda();
                    $template = 'KprikazRecept';
                    $vrsta_jela = $vjm->getVrsta_jela();
                    $right_template = 'KprikazVrste_jela';
                    break;

    default : 
                    $recept = $rm->getRecept();
                    $template = 'Kpregled';
                    $vrsta_jela = $vjm->getVrsta_jela();
                    $right_template = 'KprikazVrste_jela';
                    break;
}
include_once 'Korisnik/View/KprikazPocetne.php';
?>

