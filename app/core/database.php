<?php

class Dbh
{
    //database connection

    private $host = "localhost";
    private $user = "Ocheni";
    private $pwd = "H.5-x0-fbPoZJP[k";
    private $dbName = "blog";

    protected function connect()
    {

        try {
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
            $pdo = new PDO($dsn, $this->user, $this->pwd);

            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            return $pdo;
        } catch (\PDOException $e) {
            echo "Error!: " . $e->getMessage() . "</br>";
            die();
        }
    }
}
