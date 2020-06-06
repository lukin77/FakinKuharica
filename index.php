<?php
require_once ('Controller/ManagerVrsta_jela.php');
require_once ('Help/database.php');
require_once ('Model/ModelVrsta_jela.php');
require_once ('Model/ModelRecept.php');
require_once ('Controller/ManagerRecept.php');

$c = kuharica_baza::connect();
$rm = new ManagerRecept();
$vjm= new ManagerVrsta_jela();

if(!isset($_GET['a'])) { $a = ''; } else { $a = $_GET['a']; }

 switch ($a){
     
     case 'recept': $recept = new Recept($_GET['id']);
                    $recept->povecajBrojPregleda();
                    $template = 'prikazRecept';
     
     default : $recept = $rm->getRecept();
               $template = 'pregled';
               $vrsta_jela = $vjm->getVrsta_jela();
               $right_template = 'prikazVrste_jela';
               break;
     
               
 }

 include_once './View/prikazPocetne.php';
?>

