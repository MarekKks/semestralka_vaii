<?php

/** @var \Framework\Support\LinkGenerator $link */
?>

<main class="container flex-grow-1 py-4">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6">

            <section class="formular obsah-karta mb-4">
                <h1 class="h3 mb-4">Kontrola kompatibility</h1>

                <form action="#" method="post">
                    <div class="mb-3">
                        <label for="procesor" class="form-label font-weight-bold">Procesor</label>
                        <select id="procesor" name="procesor" class="form-select">
                            <option value="">Vyberte...</option>
                            <option value="1">AMD Ryzen 5 7600</option>
                            <option value="2">Intel Core i5-13400F</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="doska" class="form-label font-weight-bold">Základná doska</label>
                        <select id="doska" name="doska" class="form-select">
                            <option value="">Vyberte...</option>
                            <option value="1">ASUS TUF Gaming B650-PLUS</option>
                            <option value="2">MSI PRO Z790-P</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="ram" class="form-label font-weight-bold">Pamäť RAM</label>
                        <select id="ram" name="ram" class="form-select">
                            <option value="">Vyberte...</option>
                            <option value="1">Kingston Fury 16 GB DDR5</option>
                            <option value="2">Corsair Vengeance 16 GB DDR4</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 py-2 mt-2">Skontrolovať</button>
                </form>
            </section>

            <section class="obsah-karta">
                <h2 class="h5 mb-3">Výsledok</h2>

                <ul class="vysledky">
                    <li class="polozka">
                        <span class="dvojica">Procesor – Základná doska</span>
                        <span class="stav ok">✓ Kompatibilné</span>
                    </li>
                    <li class="polozka">
                        <span class="dvojica">Základná doska – RAM</span>
                        <span class="stav chyba">✗ Nekompatibilné</span>
                        <small class="dovod">Typ pamäte nesedí.</small>
                    </li>
                </ul>
            </section>

        </div>
    </div>
</main>