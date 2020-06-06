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

    public function getRecept(){
        $sql = "SELECT * FROM recept";
        $r = $this->c->query($sql);
        while($row = $r->fetch_assoc()){
            $v = new Recept();
            $v->setId($row['id']);
            $v->setNaslov($row['naslov']);
            $v->setAutor($row['vk_autora']);
            $v->setVrstaJela($row['vk_vrsta_jela']);
            $v->setDatum($row['datum_objavljivanja']);
            $v->setSastojci($row['sastojci']);
            $v->setTekstRecepta($row['tekst_recepta']);
            $v->setOcjena($row['ocjena']);
            $v->setBrojPregleda($row['br_pregleda']);
            $this->vise_vrsta_recepata[] = $v;
        }
        return $this->vise_vrsta_recepata;
    }
    
    public static function IspisRecepta(){
        $sql = "SELECT * FROM recept";
        //$r = $this->c->query($sql);  Fatal error: Uncaught Error: Using $this when not in object context
        $c = kuharica_baza::connect();
        $r = $c->query($sql);
        $recepti = array();
        while($row = $r->fetch_assoc()){
            $v = new Recept();
            $v->setId($row['id']);
            $v->setNaslov($row['naslov']);
            $v->setAutor($row['vk_autora']);
            $v->setVrstaJela($row['vk_vrsta_jela']);
            $v->setDatum($row['datum_objavljivanja']);
            $v->setSastojci($row['sastojci']);
            $v->setTekstRecepta($row['tekst_recepta']);
            $v->setOcjena($row['ocjena']);
            $v->setBrojPregleda($row['br_pregleda']);
            $recepti[] = $v;
        }
        foreach ($recepti as $v){
            
            //i jos dodati sastojke ovo ono sve to srediti
            echo '<p><a href="?a=vrsta_recepta&id="'.$v->getId().'>'.$v->getNaslov().'</a></p>';
            echo '<p>'.$v->getTekstRecepta().'</p>';
        }
    }
}



?>