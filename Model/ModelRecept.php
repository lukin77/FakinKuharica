<?php

class Recept {
    private $id;
    private $naslov;
    private $vk_autora;
    private $vk_vrsta_jela;
    private $datum;
    private $sastojci;
    private $opis;
    private $tekst_recepta;
    private $ocjena;
    private $br_pregleda;
    private $autor;
    private $tip = array();
    
    //pristup vrijednostima 
    
    public function __construct($id=null){
        
        if($id){
            $c = kuharica_baza::connect();
            $sql = "SELECT * FROM recept WHERE id = $id LIMIT 1";
            $r = $c->query($sql);
            $red = $r->fetch_assoc();
            
            //postavljanje vrijednosti atributa
            $this->id=$red['id'];
            $this->naslov=$red['naslov'];
            $this->vk_autora=$red['vk_autora'];
            $this->vk_vrsta_jela=$red['vk_vrsta_jela'];
            $this->datum = $red['datum_objavljivanja'];
            $this->sastojci=$red['sastojci'];
            $this->opis=$red['opis'];
            $this->tekst_recepta=$red['tekst_recepta'];
            $this->ocjena=$red['ocjena'];
            $this->br_pregleda=$red['br_pregleda'];
        }
        
    }
    
    public function povecajBrojPregleda(){
        $c = kuharica_baza::connect();
        $sql = "UPDATE recept SET br_pregleda=br_pregleda+1 WHERE id=".$this->id;
        $c->query($sql);
        
    }
    
    public function getImeAutora(){
        $c = kuharica_baza::connect();
        $sql = "SELECT * FROM korisnik WHERE id = $this->vk_autora LIMIT 1";
        $r = $c->query($sql);
        $red = $r->fetch_assoc();
        $this->autor = $red['ime']." ".$red['prezime'];
        return $this->autor;
    }


    public function getId(){return $this->id;}
    public function getNaslov(){return $this->naslov;}
    public function getAutor(){return $this->vk_autora;}
    public function getVrstaJela(){return $this->vk_vrsta_jela;}
    public function getDatum(){return $this->datum;}
    public function getSastojci(){return $this->sastojci;}
    public function getOpis(){return $this->opis;}
    public function getTekstRecepta(){return $this->tekst_recepta;}
    public function getOcjena(){return $this->ocjena;}
    public function getBrojPregleda(){return $this->br_pregleda;}
    public function getTip(){return $this->tip;}

    public function setId($id){$this->id=$id;}
    public function setNaslov($naslov){$this->naslov=$naslov;}
    public function setAutor($autor){$this->vk_autora=$autor;}
    public function setVrstaJela($vk_vrsta_jela){$this->vk_vrsta_jela=$vk_vrsta_jela;}
    public function setDatum($datum){$this->datum=$datum;}
    public function setSastojci($sastojci){$this->sastojci=$sastojci;}
    public function setOpis($opis){$this->opis=$opis;}
    public function setTekstRecepta($tekst_recepta){$this->tekst_recepta=$tekst_recepta;}
    public function setOcjena($ocjena){$this->ocjena=$ocjena;}
    public function setBrojPregleda($br_pregleda){$this->br_pregleda=$br_pregleda;}
    public function setTip($tip){$this->tip=$tip;}

}

?>