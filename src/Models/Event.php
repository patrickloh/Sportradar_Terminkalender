<?php


namespace src\Models;


class Event
{
    private $Name;
    private $Description;
    private $Pricepool;
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

    public function getPricepool(): int
    {
        return $this->Pricepool;
    }

    public function setPricepool($Pricepool): void
    {
        $this->Pricepool = $Pricepool;
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