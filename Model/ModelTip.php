<?php
class Tip {  // Vrsta_jela
    
    // ID I NAZIV TIPA JELA (1-slano, 2-slatko, ...)
    private $id;
    private $naziv;
    
    
    public function __construct($id=null){
         if($id){
            $c = kuharica_baza::connect();
            $sql = "SELECT * FROM tip WHERE id = $id LIMIT 1";
            $r = $c->query($sql);
            $row = $r->fetch_assoc();
            $this->id = $row['id'];
            $this->naziv = $row['naziv'];
        }
    }
    public function getId(){return $this->id; }
    public function getNaziv(){return $this->naziv; }
    
    public function setId($id){ $this->id = $id; }
    public function setNaziv($naziv){ $this->naziv = $naziv; }
}


?>
