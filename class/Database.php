<?php

class Database {

    private $hostdb = "localhost";
    private $userdb = "root";
    private $passdb = "";
    private $namedb = "oop_crud";
    public $pdo;

    /*
    ||==========================================
    ||  Set Database Connection
    ||  Make Connection During Class Instance
    ||==========================================
    */
    public function __construct() {
        if (!isset($this->pdo)) {
            try {
                $link = new PDO("mysql:host=" . $this->hostdb . "; dbname=" . $this->namedb, $this->userdb, $this->passdb);
                $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $link->exec("SET CHARACTER SET utf8");
                $this->pdo = $link;
            } catch (PDOException $exc) {
                die("Field to Connect with Database" . $exc->getMessage());
            }
        }
    }

}
