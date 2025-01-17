<?php

class ManagerRecept {

    
    private $vise_vrsta_recepata = array();
   
    private $vrsta_recepata;
    private $c;

    public function __construct() {
        $this->c = kuharica_baza::connect();
    }

    public function getRecept($prikaz = 'svi') {

        
        switch ($prikaz) {
            
            case 'my': $vk = $_SESSION['userID'];
                $sql = "SELECT r.id, r.naslov, r.sastojci, r.opis, r.tekst_recepta, r.vk_vrsta_jela, r.datum_objavljivanja, r.br_pregleda, r.ocjena, r.br_ocjena, k.id AS kid, k.ime, k.prezime, v.naziv
                                        FROM recept r
                                        LEFT JOIN vrsta_jela v ON (r.vk_vrsta_jela = v.id) 
                                        LEFT JOIN korisnik k ON (r.vk_autora = k.id)
                                        WHERE r.vk_autora = $vk ";
                break;
            
            
            case 'svi': $sql = "SELECT r.id, r.naslov, r.sastojci, r.opis, r.tekst_recepta, r.vk_vrsta_jela, r.datum_objavljivanja, r.br_pregleda, r.ocjena, r.br_ocjena, k.id AS kid, k.ime, k.prezime, v.naziv
                                        FROM recept r
                                        LEFT JOIN vrsta_jela v ON (r.vk_vrsta_jela = v.id) 
                                        LEFT JOIN korisnik k ON (r.vk_autora = k.id) ";
                break;


            case 'kategorija': $id = $_GET['id'];
                $sql = "SELECT r.id, r.naslov, r.sastojci, r.opis, r.tekst_recepta, r.vk_vrsta_jela, r.datum_objavljivanja, r.br_pregleda, r.ocjena,r.br_ocjena, k.id AS kid, k.ime, k.prezime, v.naziv
                                        FROM recept r
                                        LEFT JOIN vrsta_jela v ON (r.vk_vrsta_jela = v.id) 
                                        LEFT JOIN korisnik k ON (r.vk_autora = k.id) 
                                        WHERE v.id = $id ";
                break;

            case 'tip': $id = $_GET['id'];
                $sql = "SELECT r.id, r.naslov, r.sastojci, r.opis, r.tekst_recepta, r.vk_vrsta_jela, r.datum_objavljivanja, r.br_pregleda, r.ocjena,r.br_ocjena, k.id AS kid, t.id AS tipid, t.naziv, tr.id_tip, tr.id_recept
                                FROM recept r
                                LEFT JOIN tip_recepta tr ON (r.id = tr.id_recept)
                                LEFT JOIN tip t ON (t.id = tr.id_tip)
                                LEFT JOIN korisnik k ON (r.vk_autora = k.id)
                                WHERE t.id = $id ";
                break;
        }
        
        if(isset($_GET['order'])){
            if($_GET['order'] == 'r.br_pregleda'){
                $order = $_GET['order'];
                $sql.="ORDER BY $order DESC";
            }
            if($_GET['order'] == 'r.datum_objavljivanja'){
                $order = $_GET['order'];
                $sql.="ORDER BY $order DESC";
            }
            
        }

        $r = $this->c->query($sql);
        while ($row = $r->fetch_assoc()) {
            $v = new Recept();
            $v->setId($row['id']);
            $v->setNaslov($row['naslov']);
            $v->setAutor($row['kid']);
            $v->setVrstaJela($row['vk_vrsta_jela']);
            $v->setDatum($row['datum_objavljivanja']);
            $v->setSastojci($row['sastojci']);
            $v->setOpis($row['opis']);
            $v->setTekstRecepta($row['tekst_recepta']);
            $v->setBrOcjena($row['br_ocjena']);
            $v->setOcjena($row['ocjena']);
            $v->setBrojPregleda($row['br_pregleda']);
            $this->vise_vrsta_recepata[] = $v;
        }
        return $this->vise_vrsta_recepata;
    }

    public function create(Recept $r) {
        $naslov = $r->getNaslov();
        $vk_autora = $r->getAutor();
        $vk_vrsta_jela = $r->getVrstaJela();
        $sastojci = $r->getSastojci();
        $opis = $r->getOpis();
        $tekstRecepta = $r->getTekstRecepta();
        $datum = $r->getDatum();
        $sql = "INSERT INTO recept (naslov, vk_autora, vk_vrsta_jela, datum_objavljivanja ,sastojci, opis,tekst_recepta , ocjena, br_ocjena, br_pregleda) VALUES ('$naslov', '$vk_autora','$vk_vrsta_jela','$datum','$sastojci','$opis','$tekstRecepta',5,1,0)";
        //$this->c->query($sql);
        //if($c->errno) {echo $c->error;}
        $c = kuharica_baza::connect();
        $c->query($sql);
        if ($c->errno) {
            echo $c->error;
        }
        $c->close();
    }
    
    

    public function update(Recept $r) {
        $naslov = $r->getNaslov();
        $vk_autora = $r->getAutor();
        $vk_vrsta_jela = $r->getVrstaJela();
        $sastojci = $r->getSastojci();
        $opis = $r->getOpis();
        $tekstRecepta = $r->getTekstRecepta();
        $id = $r->getId();
        $sql = "UPDATE recept SET naslov ='$naslov', vk_autora = '$vk_autora', vk_vrsta_jela='$vk_vrsta_jela', sastojci='$sastojci', opis='$opis', tekst_recepta = '$tekstRecepta' WHERE id = '$id' LIMIT 1";
        $c = kuharica_baza::connect();
        $c->query($sql);
        if ($c->errno) {
            echo $c->error;
        }
        $c->close();
    }

    public function delete($r) {
        $id = $r->getId();
        $sql = "DELETE FROM recept WHERE id = $id LIMIT 1";
        $c = kuharica_baza::connect();
        $c->query($sql);
        if ($c->errno) {
            echo $c->error;
        }
        $sql2 = "DELETE FROM tip_recepta WHERE id_recept = $id ";
        $c->query($sql2);
        if ($c->errno) {
            echo $c->error;
        }
        $c->close();
    }
    
    public function ReceptTip($id_recept , $id_tip = array()){
        $c= kuharica_baza::connect();
        foreach ($id_tip as $t){
            $sql = "INSERT INTO tip_recepta (id_tip, id_recept) VALUES ('$t', '$id_recept')";
            $c->query($sql);
            if ($c->errno) {
            echo $c->error;
            }
        }
        $c->close();
        
    }
}

?>