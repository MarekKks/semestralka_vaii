<?php

/** @var \App\Models\Kategoria[] $kategorie */
/** @var Framework\Support\LinkGenerator $link */
?>

<div class="container py-4">
    <div class="row mb-4">
        <div class="col">
            <a href="<?= $link->url('kategoria.add') ?>" class="btn btn-success">Pridať kategóriu</a>
        </div>
    </div>
    <div class="card obsah-karta shadow-sm">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Názov</th>
                    <th>Popis</th>
                    <th class="text-end">Akcie</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($kategorie as $k) { ?>
                    <tr>
                        <td><?= $k->getId() ?></td>
                        <td><strong><?= e($k->getNazov()) ?></strong></td>
                        <td><?= e($k->getPopis() ?: '-') ?></td>
                        <td class="text-end">
                            <div class="d-flex gap-2 justify-content-end">
                                <a href="<?= $link->url('kategoria.edit', ['id' => $k->getId()]) ?>"
                                   class="btn btn-sm btn-primary">Upraviť</a>
                                <form method="post" action="<?= $link->url('kategoria.delete') ?>">
                                    <input type="hidden" name="id" value="<?= $k->getId() ?>">
                                    <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Zmaže sa aj všetky komponenty v kategórii. Pokračovať?')">
                                        Zmazať
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>