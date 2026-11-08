<?php

/** @var \App\Models\Komponent $komponent */
/** @var Framework\Support\LinkGenerator $link */
?>

<form method="post" action="<?= $link->url('komponent.save') ?>">
    <input type="hidden" name="id" value="<?= $komponent->getId() ?>">

    <div class="mb-3">
        <label for="nazov" class="form-label">Názov</label>
        <input type="text" class="form-control" name="nazov" id="nazov" value="<?= e($komponent->getNazov()) ?>" required>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="kategoria_id" class="form-label">Kategória (ID)</label>
            <input type="number" class="form-control" name="kategoria_id" id="kategoria_id" value="<?= e($komponent->getKategoriaId() ?? 1) ?>" required>
        </div>
        <div class="col-md-6 mb-3">
            <label for="vyrobca_id" class="form-label">Výrobca (ID)</label>
            <input type="number" class="form-control" name="vyrobca_id" id="vyrobca_id" value="<?= e($komponent->getVyrobcaId() ?? 1) ?>" required>
        </div>
    </div>

    <div class="mb-3">
        <label for="cena" class="form-label">Cena (€)</label>
        <input type="number" step="0.01" class="form-control" name="cena" id="cena" value="<?= e($komponent->getCena()) ?>" required>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="patica" class="form-label">Patica (socket)</label>
            <input type="text" class="form-control" name="patica" id="patica" value="<?= e($komponent->getPatica()) ?>">
        </div>
        <div class="col-md-6 mb-3">
            <label for="typ_pamate" class="form-label">Typ pamäte</label>
            <input type="text" class="form-control" name="typ_pamate" id="typ_pamate" value="<?= e($komponent->getTypPamate()) ?>">
        </div>
    </div>

    <div class="mb-3">
        <label for="popis" class="form-label">Popis</label>
        <textarea class="form-control" name="popis" id="popis"><?= e($komponent->getPopis()) ?></textarea>
    </div>

    <div class="d-flex justify-content-between">
        <a href="<?= $link->url('komponent.index') ?>" class="btn btn-secondary">Zrušiť</a>
        <button type="submit" class="btn btn-primary">Uložiť</button>
    </div>
</form>