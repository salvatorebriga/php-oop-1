<?php

class Actor
{
    private string $name;
    private int $age;

    public function __construct(string $_name, int $_age)
    {
        $this->setActorName($_name);
        $this->setActorAge($_age);
    }

    public function setActorName(string $_name): void
    {
        if (!is_string($_name)) {
            throw new Error("Dato Errato", 1);
        } else {
            $this->name = $_name;
        }
    }

    public function getActorName(): string
    {
        return $this->name;
    }

    public function setActorAge(int $_age): void
    {
        if (!is_int($_age)) {
            throw new Error("Dato Errato", 1);
        } else {
            $this->age = $_age;
        }
    }

    public function getActorAge(): int
    {
        return $this->age;
    }
}
