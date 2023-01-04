<?php

class Database {
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;
    private $port = DB_PORT;

    private $dbh;
    private $stmt;
    private $error;

    public function __construct() {
        $dsn = 'pgsql:host=' . $this->host . ';dbname=' . $this->dbname;     
        try{
            $pdo = new PDO($dsn, $this->user, $this->pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        }catch(PDOException $e){
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }
}