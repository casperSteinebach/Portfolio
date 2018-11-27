<?php
class connection {
    public function connect(){
        $dbh = new PDO('mysql:host=localhost;dbname=portfolio', "root", "");
     return $dbh;
    }
}