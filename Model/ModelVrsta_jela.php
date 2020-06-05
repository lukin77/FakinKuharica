<?php
class Vrsta_jela {
    
    // ID I NAZIV VRSTE JELA (1-Glavno jelo, ...)
    private $id;
    private $naziv;
    
    

    // UZIMANJE VRIJEDNOSTI ATRIBUTA IZ BAZE
    public function __construct($id=false){
         if($id){
            $c = kuharica_baza::connect();
            $sql = "SELECT * FROM vrsta_jela WHERE id = $id LIMIT 1";
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