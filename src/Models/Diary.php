<?php


namespace src\Models;


class Diary
{
    private $Date;
    private $SportType;
    private $SportTypeID;
    private $Eventname;
    private $EventID;
    private $ParticipantOne;
    private $ParticipantOneID;
    private $ParticipantTwo;
    private $ParticipantTwoID;

    public function getDate()
    {
        return $this->Date;
    }

    public function setDate($Date): void
    {
        $this->Date = $Date;
    }

    public function getSportType(): string
    {
        return $this->SportType;
    }

    public function setSportType($SportType): void
    {
        $this->SportType = $SportType;
    }

    public function getSportTypeID()
    {
        return $this->SportTypeID;
    }

    public function setSportTypeID($SportTypeID): void
    {
        $this->SportTypeID = $SportTypeID;
    }

    public function getEventname(): string
    {
        return $this->Eventname;
    }

    public function setEventname($Eventname): void
    {
        $this->Eventname = $Eventname;
    }

    public function getEventID()
    {
        return $this->EventID;
    }

    public function setEventID($EventID): void
    {
        $this->EventID = $EventID;
    }

    public function getParticipantOne(): string
    {
        return $this->ParticipantOne;
    }

    public function setParticipantOne($ParticipantOne): void
    {
        $this->ParticipantOne = $ParticipantOne;
    }

    public function getParticipantOneID()
    {
        return $this->ParticipantOneID;
    }

    public function setParticipantOneID($ParticipantOneID): void
    {
        $this->ParticipantOneID = $ParticipantOneID;
    }

    public function getParticipantTwo(): string
    {
        return $this->ParticipantTwo;
    }

    public function setParticipantTwo($ParticipantTwo): void
    {
        $this->ParticipantTwo = $ParticipantTwo;
    }

    public function getParticipantTwoID()
    {
        return $this->ParticipantTwoID;
    }

    public function setParticipantTwoID($ParticipantTwoID): void
    {
        $this->ParticipantTwoID = $ParticipantTwoID;
    }


}