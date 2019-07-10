<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ExperiencesRepository")
 */
class Experiences
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $experiencesPoste;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $experiencesEntreprise;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getExperiencesPoste(): ?string
    {
        return $this->experiencesPoste;
    }

    public function setExperiencesPoste(string $experiencesPoste): self
    {
        $this->experiencesPoste = $experiencesPoste;

        return $this;
    }

    public function getExperiencesEntreprise(): ?string
    {
        return $this->experiencesEntreprise;
    }

    public function setExperiencesEntreprise(string $experiencesEntreprise): self
    {
        $this->experiencesEntreprise = $experiencesEntreprise;

        return $this;
    }
}
