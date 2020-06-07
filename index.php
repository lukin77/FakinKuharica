<?php
require_once ('Controller/ManagerVrsta_jela.php');
require_once ('Help/database.php');
require_once ('Model/ModelVrsta_jela.php');
require_once ('Model/ModelRecept.php');
require_once ('Controller/ManagerRecept.php');
require_once ('Controller/ManagerTip.php');
require_once ('Model/ModelTip.php');


$c = kuharica_baza::connect();
$rm = new ManagerRecept();
$vjm = new ManagerVrsta_jela();
$vt = new ManagerTip();

if (!isset($_GET['a'])) {
    $a = '';
} else {
    $a = $_GET['a'];
}

switch ($a) {
    case 'login': 
                    header("Location:  View/ViewPrijava.php");
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

