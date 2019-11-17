<?php
error_reporting(E_ALL); // Fehlermeldungen: 0 = unterdrücken | E_ALL = Anzeigen
ini_set('display_errors', 1);

class database
{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbname = "SportsDiary";
    private $db;

    public function connect()
    {
        $db=@new mysqli($this->host, $this->user, $this->pass, $this->dbname);

        if($db->connect_error)
        {
            die("Connection failed: " . $db->connect_error);
        }
        return $db;
    }

    public function disconnect()
    {
        $db = $this->connect();
        $db->close();
    }
}


