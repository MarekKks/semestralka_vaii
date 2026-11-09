<?php

/** @var \App\Models\Komponent[] $komponenty */
/** @var Framework\Support\LinkGenerator $link */
/** @var array $kategorie */
?>

<div class="container py-4">
    <div class="row mb-4">
        <div class="col">
            <a href="<?= $link->url('komponent.add') ?>" class="btn btn-success">Pridať komponent</a>
        </div>
    </div>
    <div class="card obsah-karta shadow-sm">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Názov</th>
                    <th>Cena</th>
                    <th>Patica</th>
                    <th>RAM</th>
                    <th>Kategória</th>
                    <th class="text-end">Akcie</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($komponenty as $k) { ?>
                    <tr>
                        <td><?= $k->getId() ?></td>
                        <td><strong><?= e($k->getNazov()) ?></strong></td>
                        <td><?= number_format($k->getCena(), 2, ',', ' ') ?> €</td>
                        <td><?= e($k->getPatica() ?? '-') ?></td>
                        <td><?= e($k->getTypPamate() ?? '-') ?></td>
                        <td><?= e($kategorie[$k->getKategoriaId()] ?? '-') ?></td>
                        <td class="text-end">
                            <div class="d-flex gap-2 justify-content-end">
                                <a href="<?= $link->url('komponent.edit', ['id' => $k->getId()]) ?>" class="btn btn-sm btn-primary">Upraviť</a>
                                <form method="post" action="<?= $link->url('komponent.delete') ?>">
                                    <input type="hidden" name="id" value="<?= $k->getId() ?>">
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Naozaj vymazať?')">Zmazať</button>
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