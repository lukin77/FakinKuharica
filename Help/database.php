<?php
class kuharica_baza {
    const host = 'localhost';
    const user = 'root';
    const pass = '';
    const database = 'kuharica_baza';

    public static function connect() {
        $c = new mysqli(self::host, self::user, self::pass, self::database);
        $c->query("SET CHARACTER SET utf8");
        return $c;
    }
}
?>