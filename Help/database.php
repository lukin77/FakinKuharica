<?php
class kuharica_baza {
    const host = 'localhost';
    const user = 'root';
    const pass = '';
    const database = 'kuharica_baza';
    
    //komentaraksfhkashfafjlksdkčls
    
    public static function connect() {
        $c = new mysqli(self::host, self::user, self::pass, self::database);
        return $c;
    }
}
?>