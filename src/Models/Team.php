<?php


namespace src\Models;


class Team
{
    private $Name;
    private $Description;
    private $SportType;
    private $SportTypeID;

    public function getName(): string
    {
        return $this->Name;
    }

    public function setName($Name): void
    {
        $this->Name = $Name;
    }

    public function getDescription(): string
    {
        return $this->Description;
    }

    public function setDescription($Description): void
    {
        $this->Description = $Description;
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
}