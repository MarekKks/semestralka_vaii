<?php

namespace App\Models;

use Framework\Core\Model;

class Kategoria extends Model
{
    protected static ?array $fillable = ['nazov', 'popis'];

    protected ?int $id = null;
    protected ?string $nazov = null;
    protected ?string $popis = null;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getNazov(): ?string
    {
        return $this->nazov;
    }

    /**
     * @param string|null $nazov
     */
    public function setNazov(?string $nazov): void
    {
        $this->nazov = $nazov;
    }

    /**
     * @return string|null
     */
    public function getPopis(): ?string
    {
        return $this->popis;
    }

    /**
     * @param string|null $popis
     */
    public function setPopis(?string $popis): void
    {
        $this->popis = $popis;
    }
}