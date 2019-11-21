<?php

namespace src;
use src\Models\Calender;

class DatabaseReader
{
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function getEntries()
    {
        $calender = $this->database->loadData();

        foreach ($calender as $item)
        {
            /** @var Calender $item */
            $sportTypeID = $item->getSportTypID();
            $eventID = $item->getEventID();
            $participantOneID = $item->getParticipantOneID();
            $participantTwoID = $item->getParticipantTwoID();

            $sportType = $this->database->getSportType($sportTypeID);
            $event = $this->database->getEvent($eventID);
            $participantOne = $this->database->getTeam($participantOneID);
            $participantTwo = $this->database->getTeam($participantTwoID);

            $item->setSportTyp($sportType->getType());
            $item->setEventName($event->getEventName());
            $item->setParticipantOneName($participantOne->getTeamName());
            $item->setParticipantTwoName($participantTwo->getTeamName());
        }
        return $calender;

    }
}