<?php
class ManagerRecept{
    //
    private $vise_vrsta_recepata = array();
    
    //ako ce ostat ono da admin moze dodat (sto si ostavio za vrstu jela) (?)
    private $vrsta_recepata;
    private $c;
    
    public function __construct(){
            $this->c = kuharica_baza::connect();
    }

    public static function getRecept(){
        $sql = "SELECT * FROM recept";
        $r = $this->c->query($sql);
        while($row = $r->fetch_assoc()){
            $v = new Recept();
            $v->setId($row['id']);
            $v->setNaziv($row['naziv']);
            $this->vise_vrsta_recepata[] = $v;
        }
        return $this->vise_vrsta_recepata;
    }
    
    public static function IspisRecepta(){
        $vrsta_vrsta_recepata= ManagerRecept::getRecept();
        foreach ($vrsta_vrsta_recepata as $v){
            echo '<p><a href="?a=vrsta_recepta&id="'.$v->getId().'>'.$v->getNaziv().'</a></p>';
        }
    }
}



?>