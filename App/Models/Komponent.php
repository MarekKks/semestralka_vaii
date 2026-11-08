<?php

namespace App\Models;

use Framework\Core\Model;

class Komponent extends Model
{

    protected ?int $id = null;
    protected ?int $kategoria_id = null;
    protected ?int $vyrobca_id = null;
    protected ?string $nazov = null;
    protected ?string $popis = null;
    protected ?float $cena = null;
    protected ?string $patica = null;
    protected ?string $typ_pamate = null;

    protected static ?array $fillable = [
        'kategoria_id',
        'vyrobca_id',
        'nazov',
        'popis',
        'cena',
        'patica',
        'typ_pamate',
    ];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKategoriaId(): ?int
    {
        return $this->kategoria_id;
    }

    public function setKategoriaId(?int $kategoria_id): void
    {
        $this->kategoria_id = $kategoria_id;
    }

    public function getVyrobcaId(): ?int
    {
        return $this->vyrobca_id;
    }

    public function setVyrobcaId(?int $vyrobca_id): void
    {
        $this->vyrobca_id = $vyrobca_id;
    }

    public function getNazov(): ?string
    {
        return $this->nazov;
    }

    public function setNazov(?string $nazov): void
    {
        $this->nazov = $nazov;
    }

    public function getPopis(): ?string
    {
        return $this->popis;
    }

    public function setPopis(?string $popis): void
    {
        $this->popis = $popis;
    }

    public function getCena(): ?float
    {
        return $this->cena;
    }

    public function setCena(?float $cena): void
    {
        $this->cena = (float) $cena;
    }

    public function getPatica(): ?string
    {
        return $this->patica;
    }

    public function setPatica(?string $patica): void
    {
        $this->patica = $patica;
    }

    public function getTypPamate(): ?string
    {
        return $this->typ_pamate;
    }

    public function setTypPamate(?string $typ_pamate): void
    {
        $this->typ_pamate = $typ_pamate;
    }
}
