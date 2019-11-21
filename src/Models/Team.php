<?php

namespace src\Models;

class Team
{
    private $Name;
    private $Description;
    private $SportType;
    private $SportTypeID;

    /**
     * @return string
     */
    public function getTeamName()
    {
        return $this->Name;
    }

    /**
     * @param mixed $Name
     */
    public function setTeamName($Name): void
    {
        $this->Name = $Name;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param mixed $Description
     */
    public function setDescription($Description): void
    {
        $this->Description = $Description;
    }

    /**
     * @return string
     */
    public function getSportType()
    {
        return $this->SportType;
    }

    /**
     * @param mixed $SportType
     */
    public function setSportType($SportType): void
    {
        $this->SportType = $SportType;
    }

    /**
     * @return mixed
     */
    public function getSportTypeID()
    {
        return $this->SportTypeID;
    }

    /**
     * @param mixed $SportTypeID
     */
    public function setSportTypeID($SportTypeID): void
    {
        $this->SportTypeID = $SportTypeID;
    }

}