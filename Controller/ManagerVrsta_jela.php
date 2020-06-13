<?php
class ManagerVrsta_jela{
    //
    private $vise_vrsta_jela = array();
    private $vrsta_jela;
    private $c;
    
    public function __construct(){
            $this->c = kuharica_baza::connect();
    }
    
    
   public function UnosVrstaJela($vrsta){
        $naziv = $vrsta->getNaziv();
        $upit = "SELECT * FROM vrsta_jela WHERE naziv ='$naziv'";
        $r = $this->c->query($upit);
        if ($r && $r->num_rows == 1){
            echo 'U bazi vec postoji vrsta jela s istim nazivom';
        }else{
            $sql = "INSERT INTO vrsta_jela ( naziv ) VALUES ('$naziv')";
            $this->c->query($sql);
            if ($this->c->errno) {echo $this->c->error;} 
        }
        
    }
    
    public function DelVrstaJela($vrsta_jela){
        $id = $vrsta_jela->getId();
        $sql = "DELETE FROM vrsta_jela WHERE id ='$id' LIMIT 1";
        $this->c->query($sql);
        if ($this->c->errno) {echo $this->c->error;}
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
    
 
    public static function IspisVrsta_jela(){
        $sql = "SELECT * FROM vrsta_jela";
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
          echo '<div class="form-check">';
          echo ' <input class="form-check-input" type="radio" name="vrsta_jela" id="gridRadios'.$v->getId().'" value="'.$v->getId().'">';
          echo '<label class="form-check-label" for = "gridRadios'.$v->getId().'" >'.$v->getNaziv().'</label>';
          echo '</div>';
        }
        
    }
}



?>