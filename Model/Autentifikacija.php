<?php

class Autentikacija {

    private $id;
    private $ime;
    private $prezime;
    private $username;
    private $password;
    private $vk_tip;

    // PRISTUP VRIJEDNOSTIMA ATRIBUTA
    public function __construct($id = false) {

        if ($id) {
            $c = kuharica_baza::connect();
            $sql = "SELECT * FROM korisnici WHERE id = $id LIMIT 1";
            $r = $c->query($sql);
            $row = $r->fetch_assoc();
            // POSTAVI VRIJEDNOSTI ATRIBUTA
            $this->id = $row['id'];
            $this->ime = $row['ime'];
            $this->prezime = $row['prezime'];
            $this->username = $row['username'];
            $this->password = $row['password'];
            $this->vk_tip = $row['vk_tip'];
        }
    }

    // PRIJAVA KORISNIKA I PREUSMJERAVANJE PREMA TIPU KORISNIKA
    public function login() {
        
        $c = kuharica_baza::connect();
        // PRISTUPNI PODACI
        $username = $_POST['username'];
        //$password = md5($_POST['password']); zasad bez enkripcije
        $password = $_POST['password'];

        // PRIPREMI I IZVRŠI UPIT
        $upit = "SELECT * FROM korisnik WHERE username='$username' AND password = '$password' LIMIT 1";
        $r = $c->query($upit);
        // JE LI PRONAĐEN?
        if ($r && $r->num_rows == 1) {
            //postavi sesion
            session_start();
            $row = $r->fetch_assoc();
            $_SESSION['userID'] = $row['id'];
            $_SESSION['login'] = $username;
            $_SESSION['vk_tip_korisnika'] = $row['vk_tip_korisnika'];
            switch ($row['vk_tip_korisnika']) {
                //vk_tip_korisnika u nasoj bazi je:
                // 1 -> admin
                // 2 -> korisnik
                //treba dodati adminski dio
                case 1: header("Location: ../View/viewAdmin.php");
                    break;
                case 2: header("Location:  korisnik.php");
                    break;
                default: header("Location: ../index.php");
            }
        }
    }

    // ODJAVA KORISNIKA
    public static function logout() {
        //session_start();
        unset($_SESSION['userID']);
        unset($_SESSION['login']);
        unset($_SESSION['tip']);
        session_destroy();
        header("Location: index.php");
    }

    public static function logiran() {
        if (!isset($_SESSION['userID'])) {
            header("Location: index.php");
        }
    }

    public function getId() {
        return $this->id;
    }

    public function getIme() {
        return $this->ime;
    }

    public function getPrezime() {
        return $this->prezime;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getTip() {
        return $this->vk_tip;
    }

    public function setIme($ime) {
        $this->ime = $ime;
    }

    public function setPrezime($prezime) {
        $this->prezime = $prezime;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setTip($tip) {
        $this->vk_tip = $tip;
    }

}

?>