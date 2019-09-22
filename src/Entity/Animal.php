<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

class Animal {

    private $id;
    private $nombre;
    private $edad;
    private $color;

    public function getId(): ?int {
        return $this->id;
    }

    public function getNombre(): ?string {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self {
        $this->nombre = $nombre;

        return $this;
    }

    public function getEdad(): ?string {
        return $this->edad;
    }

    public function setEdad(string $edad): self {
        $this->edad = $edad;

        return $this;
    }

    public function getColor(): ?string {
        return $this->color;
    }

    public function setColor(string $color): self {
        $this->color = $color;

        return $this;
    }

}
