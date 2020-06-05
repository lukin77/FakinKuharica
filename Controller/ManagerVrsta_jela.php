<?php
class ManagerVrsta_jela{
    //
    private $vise_vrsta_jela = array();
    private $vrsta_jela;
    private $c;
    
    public function __construct(){
            $this->c = kuharica_baza::connect();
    }

    public static function getVrsta_jela(){
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
    
    public static function IspisVrsta_jela(){
        $vrsta_jela= ManagerVrsta_jela::getVrsta_jela();
        foreach ($vrsta_jela as $v){
            echo '<p><a href="?a=vrsta_jela&id="'.$v->getId().'>'.$v->getNaziv().'</a></p>';
        }
    }
}



?>