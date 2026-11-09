<?php

/** @var string $contentHTML */
/** @var \Framework\Auth\AppUser $user */
/** @var \Framework\Support\LinkGenerator $link */
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <title><?= App\Configuration::APP_NAME ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="manifest" href="<?= $link->asset('favicons/site.webmanifest'); ?>">
    <link rel="shortcut icon" href="<?= $link->asset('favicons/favicon.ico'); ?>"> -->
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= $link->asset('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= $link->asset('css/style.css') ?>">
    <script src="<?= $link->asset('js/script.js') ?>"></script>
</head>
<body class="d-flex flex-column min-vh-100">

<header class="container-fluid d-flex justify-content-between align-items-center hlavna-navigacia">
    <div class="d-flex align-items-center gap-3 gap-md-4 navigacia-obalka">
        <a class="navigacia-link logo" href="<?= $link->url("home.index") ?>"> PCBuilder</a>
        <nav class="d-flex gap-2 navigacia">
            <a class="navigacia-link " href="<?= $link->url("home.index") ?>">Katalóg</a>
            <a class="navigacia-link " href="<?= $link->url('home.compatibility') ?>">Kontrola kompatibility</a>
            <a class="navigacia-link" href="<?= $link->url('komponent.index') ?>">Správa komponentov</a>
            <a class="navigacia-link" href="<?= $link->url('kategoria.index') ?>">Správa kategorii</a>
        </nav>
    </div>
    <div class="d-flex align-items-center gap-3 uzivatel">
        <span class="meno">Meno používateľa</span>
        <a href="#" class="navigacia-link odhlasit">Odhlásiť</a>
    </div>
</header>

<?= $contentHTML ?>

<footer class="hlavna-paticka text-center py-3 mt-auto">
    <div class="container">
        <p class="mb-0">&copy; 2026 PCBuilder – Semestrálna aplikácia VAII</p>
    </div>
</footer>
</body>
</html>
