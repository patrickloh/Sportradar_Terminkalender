<?php

namespace src;

use mysqli;
use src\Models\Calender;
use src\Models\Event;
use src\Models\SportType;
use src\Models\Team;

error_reporting(E_ALL); // Fehlermeldungen: 0 = unterdrücken | E_ALL = Anzeigen
ini_set('display_errors', 1);

class Database
{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbname = "SportsDiary";

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

    public function loadData()
    {
        $db = $this->connect();
        $sql = "SELECT * FROM CalenderTBL";
        $result =$db->query($sql);

        $data = [];

        if($result->num_rows>0)
        {
            foreach ($result as $row)
            {
                $calender = new Calender();
                $calender->setDate($row['Date']);
                $calender->setSportTypID($row['_FK_SportTypeID']);
                $calender->setEventID($row['_FK_EventID']);
                $calender->setParticipantOneID($row['_FK_ParticipantOneID']);
                $calender->setParticipantTwoID($row['_FK_ParticipantTwoID']);

                $data[] = $calender;
            }
        }
        $this->disconnect();
        return $data;
    }

    private function execSQL($sql, $ID)
    {
        $db = $this->connect();

        $statement = $db->prepare($sql);
        $statement->bind_param('s', $ID);
        $statement->execute();
        $statement->bind_result($result);
        $statement->fetch();

        $this->disconnect();
        return $result;
    }

    public function getSportType($sportTypeID)
    {
        $sql = "SELECT Type FROM SportTypeTBL WHERE SportTypeID = ?";
        $result = $this->execSQL($sql, $sportTypeID);

        $SportType = new SportType();
        $SportType->setType($result);

        return $SportType;
    }

    public function getEvent($eventID)
    {
        $sql = "SELECT Name FROM EventTBL WHERE EventID = ?";
        $result = $this->execSQL($sql, $eventID);

        $Event = new Event();
        $Event->setEventName($result);

        return $Event;
    }

    public function getTeam($teamID)
    {
        $sql = "SELECT Name FROM TeamTBL WHERE TeamID = ?";
        $result = $this->execSQL($sql, $teamID);

        $Team = new Team();
        $Team->setTeamName($result);

        return $Team;
    }
}