<?php
class ManagerTip {
    //
    private $vise_vrsta_tipova = array();    //vise_vrsta_jela
    private $vrsta_tipa;    //vrsta_jela
    private $c;
    
    public function __construct(){
            $this->c = kuharica_baza::connect();
    }
    
    public function UnosTipJela($tip){
        $naziv = $tip->getNaziv();
        $upit = "SELECT * FROM tip WHERE naziv ='$naziv'";
        $r = $this->c->query($upit);
        if ($r && $r->num_rows == 1){
            echo 'U bazi vec postoji tip jela s istim nazivom';
        }else{
            $sql = "INSERT INTO tip ( naziv ) VALUES ('$naziv')";
            $this->c->query($sql);
            if ($this->c->errno) {echo $this->c->error;} 
        }
        
    }
    
    public function DelTipJela($t){
        $id = $t->getId();
        $sql = "DELETE FROM tip WHERE id ='$id' LIMIT 1";
        $this->c->query($sql);
        if ($this->c->errno) {echo $this->c->error;}
        
        $sql2 = "DELETE FROM tip_recept WHERE id_tip = '$id'";
        $this->c->query($sql2);
        if ($this->c->errno) {echo $this->c->error;}
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
          echo '<div class="form-check">';
          echo '<input class="form-check-input" type="checkbox" name="tip_jela[]" id="defaultCheck'.$v->getId().'" value="'.$v->getId().'">';
          echo '<label class="form-check-label" for = "defaultCheck'.$v->getId().'" >'.$v->getNaziv().'</label>';
          echo '</div>';
        }
        
    }
}



?>