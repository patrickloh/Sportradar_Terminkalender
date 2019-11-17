<?php


namespace src\Models;


class SportType
{
    private $Type;
    private $Description;

    public function getType(): string
    {
        return $this->Type;
    }

    public function setType($Type): void
    {
        $this->Type = $Type;
    }

    public function getDescription(): string
    {
        return $this->Description;
    }

    public function setDescription($Description): void
    {
        $this->Description = $Description;
    }
}