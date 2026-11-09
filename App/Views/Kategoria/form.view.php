<?php

/** @var \App\Models\Kategoria $kategoria */
/** @var Framework\Support\LinkGenerator $link */
?>

<form method="post" action="<?= $link->url('kategoria.save') ?>">
    <input type="hidden" name="id" value="<?= $kategoria->getId() ?>">

    <div class="mb-3">
        <label for="nazov" class="form-label">Názov</label>
        <input type="text" class="form-control" name="nazov" id="nazov"
               value="<?= e($kategoria->getNazov()) ?>" required>
    </div>

    <div class="mb-3">
        <label for="popis" class="form-label">Popis</label>
        <textarea class="form-control" name="popis" id="popis"><?= e($kategoria->getPopis()) ?></textarea>
    </div>

    <div class="d-flex justify-content-between">
        <a href="<?= $link->url('kategoria.index') ?>" class="btn btn-secondary">Zrušiť</a>
        <button type="submit" class="btn btn-primary">Uložiť</button>
    </div>
</form>
