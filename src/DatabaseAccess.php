<?php


namespace src;
use src\Models\Diary;


class DatabaseAccess
{
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function getAllDiaries()
    {
        $diaries = $this->database->getAllDiaries();

        foreach ($diaries as $row)
        {
            $sportTypeID = $row->getSportTypeID();
            $eventID = $row->getEventID();
            $participantOneID = $row->getParticipantOneID();
            $participantTwoID = $row->getParticipantTwoID();

            $sportType = $this->database->getSportType($sportTypeID);
            $event = $this->database->getEventname($eventID);
            $participantOne = $this->database->getTeamname($participantOneID);
            $participantTwo = $this->database->getTeamname($participantTwoID);

            $row->setSportType($sportType->getType());
            $row->setEventname($event->getName());
            $row->setParticipantOne($participantOne->getName());
            $row->setParticipantTwo($participantTwo->getName());
        }
        return $diaries;
    }
}