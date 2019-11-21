<?php

namespace src\Models;

class Calender
{
    private $Date;
    private $SportTyp;
    private $SportTypID;
    private $EventName;
    private $EventID;
    private $ParticipantOneName;
    private $ParticipantOneID;
    private $ParticipantTwoName;
    private $ParticipantTwoID;

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * @param mixed $Date
     */
    public function setDate($Date): void
    {
        $this->Date = $Date;
    }

    /**
     * @return string
     */
    public function getSportTyp()
    {
        return $this->SportTyp;
    }

    /**
     * @param mixed $SportTyp
     */
    public function setSportTyp($SportTyp): void
    {
        $this->SportTyp = $SportTyp;
    }

    /**
     * @return mixed
     */
    public function getSportTypID()
    {
        return $this->SportTypID;
    }

    /**
     * @param mixed $SportTypID
     */
    public function setSportTypID($SportTypID): void
    {
        $this->SportTypID = $SportTypID;
    }

    /**
     * @return string
     */
    public function getEventName()
    {
        return $this->EventName;
    }

    /**
     * @param mixed $EventName
     */
    public function setEventName($EventName): void
    {
        $this->EventName = $EventName;
    }

    /**
     * @return mixed
     */
    public function getEventID()
    {
        return $this->EventID;
    }

    /**
     * @param mixed $EventID
     */
    public function setEventID($EventID): void
    {
        $this->EventID = $EventID;
    }

    /**
     * @return string
     */
    public function getParticipantOneName()
    {
        return $this->ParticipantOneName;
    }

    /**
     * @param mixed $ParticipantOneName
     */
    public function setParticipantOneName($ParticipantOneName): void
    {
        $this->ParticipantOneName = $ParticipantOneName;
    }

    /**
     * @return mixed
     */
    public function getParticipantOneID()
    {
        return $this->ParticipantOneID;
    }

    /**
     * @param mixed $ParticipantOneID
     */
    public function setParticipantOneID($ParticipantOneID): void
    {
        $this->ParticipantOneID = $ParticipantOneID;
    }

    /**
     * @return string
     */
    public function getParticipantTwoName()
    {
        return $this->ParticipantTwoName;
    }

    /**
     * @param mixed $ParticipantTwoName
     */
    public function setParticipantTwoName($ParticipantTwoName): void
    {
        $this->ParticipantTwoName = $ParticipantTwoName;
    }

    /**
     * @return mixed
     */
    public function getParticipantTwoID()
    {
        return $this->ParticipantTwoID;
    }

    /**
     * @param mixed $ParticipantTwoID
     */
    public function setParticipantTwoID($ParticipantTwoID): void
    {
        $this->ParticipantTwoID = $ParticipantTwoID;
    }


}