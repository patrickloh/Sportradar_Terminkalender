<?php

namespace src\Models;

class Event
{
    private $Name;
    private $Description;
    private $PricePool;
    private $SportType;
    private $SportTypeID;

    /**
     * @return string
     */
    public function getEventName()
    {
        return $this->Name;
    }

    /**
     * @param mixed $Name
     */
    public function setEventName($Name): void
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
     * @return int
     */
    public function getPricePool()
    {
        return $this->PricePool;
    }

    /**
     * @param mixed $PricePool
     */
    public function setPricePool($PricePool): void
    {
        $this->PricePool = $PricePool;
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