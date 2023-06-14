<?php

namespace App\Entity;

use App\Repository\CatsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CatsRepository::class)]
class Cats
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nombre = null;

    #[ORM\Column(length: 255)]
    private ?string $FechaNacimiento = null;

    #[ORM\Column(length: 255)]
    private ?string $Sexo = null;

    #[ORM\Column(length: 255)]
    private ?string $Salud = null;

    #[ORM\Column(length: 255)]
    private ?string $Esterilizado = null;

    #[ORM\Column(length: 255)]
    private ?string $Imagen = null;

    #[ORM\Column(length: 1000)]
    private ?string $Descripcion = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->Nombre;
    }

    public function setNombre(string $Nombre): static
    {
        $this->Nombre = $Nombre;

        return $this;
    }

    public function getFechaNacimiento(): ?string
    {
        return $this->FechaNacimiento;
    }

    public function setFechaNacimiento(string $FechaNacimiento): static
    {
        $this->FechaNacimiento = $FechaNacimiento;

        return $this;
    }

    public function getSexo(): ?string
    {
        return $this->Sexo;
    }

    public function setSexo(string $Sexo): static
    {
        $this->Sexo = $Sexo;

        return $this;
    }

    public function getSalud(): ?string
    {
        return $this->Salud;
    }

    public function setSalud(string $Salud): static
    {
        $this->Salud = $Salud;

        return $this;
    }

    public function getEsterilizado(): ?string
    {
        return $this->Esterilizado;
    }

    public function setEsterilizado(string $Esterilizado): static
    {
        $this->Esterilizado = $Esterilizado;

        return $this;
    }

    public function getImagen(): ?string
    {
        return $this->Imagen;
    }

    public function setImagen(string $Imagen): static
    {
        $this->Imagen = $Imagen;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->Descripcion;
    }

    public function setDescripcion(string $Descripcion): static
    {
        $this->Descripcion = $Descripcion;

        return $this;
    }
}
