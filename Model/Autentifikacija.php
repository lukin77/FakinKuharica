<?php

class Autentikacija {

    private $id;
    private $ime;
    private $prezime;
    private $username;
    private $password;
    private $vk_tip;
    public $message = array();

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
            $this->vk_tip = $row['vk_tip_korisnika'];
        }
    }

    public function register() {
        $c = kuharica_baza::connect();
        $this->setUsername($_POST['username']);
        $this->setIme($_POST['name']);
        $this->setPrezime($_POST['lastname']);
        $this->setPassword($_POST['password']);
        //registrirati se mogu samo korisnici
        $this->setTip(2);
        //jesu li unesene lozinke iste?
        $password = $_POST['password'];
        $password2 = $_POST['password2'];

        $sql = "SELECT * FROM korisnik WHERE username = '$this->username' LIMIT 1";
        $r = $c->query($sql);

        if (empty($this->getIme())) {
            array_push($this->message, ' Unesite ime! <br>');
        } elseif (empty($this->getPrezime())) {
            array_push($this->message, ' Unesite prezime! <br>');
        } elseif (empty($this->getUsername())) {
            array_push($this->message, ' Unesite korisnicko ime! <br>');
        } elseif ($r && $r->num_rows == 1) {
            array_push($this->message, 'Postoji korisnik s istim username-om. <br>');
        } elseif (empty($this->getPassword())) {
            array_push($this->message, ' Unesite lozinku! <br>');
        } elseif ($password == $password2) {
            $this->setPassword(md5($_POST['password']));
        } else {
            array_push($this->message, 'Lozinke nisu iste. <br>');
        }if (empty($this->message)) {
            $ime = $this->getIme();
            $prezime = $this->getPrezime();
            $username = $this->getUsername();
            $password = $this->getPassword();
            $tip = $this->getTip();
            $sql = "INSERT INTO korisnik (ime, prezime, username, password, vk_tip_korisnika) VALUES ('$ime','$prezime', '$username','$password','$tip')";
            $c->query($sql);
            if ($c->errno) {
                array_push($this->message, $c->error);
            }
        }
    }

    // PRIJAVA KORISNIKA I PREUSMJERAVANJE PREMA TIPU KORISNIKA
    public function login() {

        $c = kuharica_baza::connect();
        // PRISTUPNI PODACI
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        //$password = $_POST['password'];
        // PRIPREMI I IZVRŠI UPIT
        $upit = "SELECT * FROM korisnik WHERE username='$username' AND password = '$password'";
        $r = $c->query($upit);
        // JE LI PRONAĐEN?
        if ($r && $r->num_rows == 1) {
            //postavi sesion
            session_start();
            $row = $r->fetch_assoc();
            $imeIprezime = $row['ime'] . ' ' . $row['prezime'];
            //setcookie('user', $username, time() + (86400 * 30));
            setcookie('korisnik', $imeIprezime, time() + (86400 * 30));
            $_SESSION['userID'] = $row['id'];
            $_SESSION['vk_tip_korisnika'] = $row['vk_tip_korisnika'];
            switch ($_SESSION['vk_tip_korisnika']) {
                //vk_tip_korisnika u nasoj bazi je:
                // 1 -> admin
                // 2 -> korisnik
                //treba dodati adminski dio
                case 1: header("Location: admin.php");
                    break;
                case 2: header("Location:  korisnik.php");
                    break;
            }
        } else {
            header("Location:  index.php");
        }
    }

    // ODJAVA KORISNIKA
    public static function logout() {
        session_start();
        unset($_SESSION['userID']);
        //mislin da ne ide ovako ovaj cookie
        unset($_COOKIE['login']);
        unset($_SESSION['vk_tip_korisnika']);
        session_destroy();
        header("Location: index.php");
    }

   

    public static function isUser() {
        if (isset($_SESSION['vk_tip_korisnika'])) {
            if ($_SESSION['vk_tip_korisnika'] == 1) {
                header("Location: admin.php");
            }
        } else {
            header("Location: index.php");
        }
    }

    public static function isAdmin() {
        if (isset($_SESSION['vk_tip_korisnika'])) {
            if ($_SESSION['vk_tip_korisnika'] == 2) {
                header("Location: korisnik.php");
            }
        } else {
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