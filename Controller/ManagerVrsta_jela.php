<?php
class ManagerVrsta_jela{
    //
    private $vise_vrsta_jela = array();
    private $vrsta_jela;
    private $c;
    
    public function __construct(){
            $this->c = kuharica_baza::connect();
    }

    public function getVrsta_jela(){
        
        $sql = "SELECT * FROM vrsta_jela";
        $r = $this->c->query($sql);
        while($row = $r->fetch_assoc()){
            $v = new Vrsta_jela();
            $v->setId($row['id']);
            $v->setNaziv($row['naziv']);
            $this->vise_vrsta_jela[] = $v;
        }
        return $this->vise_vrsta_jela;
    }
    
    //ne znan ovo ispisati
    public static function IspisVrsta_jela(){
        $sql = "SELECT * FROM vrsta_jela";
        //$r = $this->c->query($sql); //Fatal error: Uncaught Error: Using $this when not in object context 
        $c = kuharica_baza::connect();
        $r = $c->query($sql);
        $vrste = array();
        while($row = $r->fetch_assoc()){
            $v = new Vrsta_jela();
            $v->setId($row['id']);
            $v->setNaziv($row['naziv']);
            $vrste[] = $v;
        }
        foreach ($vrste as $v){
          echo '<p><a href="?a=vrsta_jela&id="'.$v->getId().'>'.$v->getNaziv().'</a></p>';  
        }
        
    }
}



?>