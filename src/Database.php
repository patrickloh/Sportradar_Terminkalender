<?php

namespace src;

use mysqli;
use src\Models\Diary;
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

    public function getAllDiaries()
    {
        $db = $this->connect();
        $sql = "SELECT * FROM DiaryTBL";
        $result = $db->query($sql);
        $allDiaries = [];

        if ($result->num_rows > 0)
        {
            foreach ($result as $row)
            {
                $diary = new Diary();
                $diary->setDate($row['Date']);
                $diary->setSportTypeID($row['_FK_SportTypeID']);
                $diary->setEventID($row['_FK_EventID']);
                $diary->setParticipantOneID($row['_FK_ParticipantOneID']);
                $diary->setParticipantTwoID($row['_FK_ParticipantTwoID']);

                $allDiaries[] = $diary;
            }

            $this->disconnect();
            return$allDiaries;
        }
    }

    public function getSportType($ID)
    {
        $db = $this->connect();
        $sql = "SELECT Type FROM SportTypeTBL WHERE SportTypeID = ?";
        $statement = $db->prepare($sql);
        $statement->execute($ID);

        $result = $statement->fetch();

        $SportType = new SportType();
        $SportType->setType($result['Type']);

        $this->disconnect();

        return $SportType;
    }

    public function getEventname($ID)
    {
        $db = $this->connect();
        $sql = "SELECT Name FROM EventTBL WHERE EventID = ?";
        $statement = $db->prepare($sql);
        $statement->execute($ID);

        $result = $statement->fetch();

        $Eventname = new Event();
        $Eventname->setName($result['Name']);

        $this->disconnect();

        return $Eventname;
    }

    public function getTeamname($ID)
    {
        $db = $this->connect();
        $sql = "SELECT Name FROM TeamTBL WHERE TeamID = ?";
        $statement = $db->prepare($sql);
        $statement->execute($ID);

        $result = $statement->fetch();

        $Teamname = new Team();
        $Teamname->setName($result['Name']);

        $this->disconnect();

        return $Teamname;
    }
}


