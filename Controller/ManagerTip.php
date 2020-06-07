<?php
class ManagerTip{
    //
    private $vise_vrsta_tipova = array();    //vise_vrsta_jela
    private $vrsta_tipa;    //vrsta_jela
    private $c;
    
    public function __construct(){
            $this->c = kuharica_baza::connect();
    }

    public function getTip(){       //getVrsta_jela
        
        $sql = "SELECT * FROM tip";
        $r = $this->c->query($sql);
        while($row = $r->fetch_assoc()){
            $v = new Tip();   //Vrsta_jela()
            $v->setId($row['id']);
            $v->setNaziv($row['naziv']);
            $this->vise_vrsta_tipova[] = $v;    //vise_vrsta_jela
        }
        return $this->vise_vrsta_tipova; //vise_vrsta_jela
    }
    
    //ne znan ovo ispisati
    public static function IspisTip(){   //IspisVrsta_jela
        $sql = "SELECT * FROM tip";
        $c = kuharica_baza::connect();
        $r = $c->query($sql);
        $vrste = array();
        while($row = $r->fetch_assoc()){
            $v = new Tip();  //Vrsta_jela()
            $v->setId($row['id']);
            $v->setNaziv($row['naziv']);
            $vrste[] = $v;
        }
        foreach ($vrste as $v){
          echo '<p><a href="?a=vrsta_tipa&id="'.$v->getId().'>'.$v->getNaziv().'</a></p>';  
        }
        
    }
}



?>