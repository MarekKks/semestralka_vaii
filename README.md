# PCBuilder – kontrola kompatibility PC komponentov

Marek Kokoška
5ZYI31

## Stručný opis projektu
PCBuilder je webová aplikácia na prezeranie katalógu PC komponentov a kontrolu ich vzájomnej kompatibility. Je určená ľuďom, ktorí si skladajú počítač a chcú sa vyhnúť chybnej kombinácii, napríklad procesoru, ktorý nesedí do základnej dosky.

Hlavným účelom je mať na jednom mieste katalóg komponentov a nástroj, v ktorom si používateľ vyberie komponenty a aplikácia mu povie, či sú navzájom kompatibilné.

## Role v projekte
Návštevník: prezerá a filtruje katalóg, môže sa zaregistrovať a prihlásiť.
Používateľ: má možnosti návštevníka a navyše môže používať kontrolu kompatibility.
Administrátor: spravuje komponenty a kategórie.

## Prípady použitia podľa rolí
Návštevník

vyfiltruje komponenty podľa kategórie a výrobcu
zaregistruje sa a prihlási

Používateľ

vyberie procesor, základnú dosku a pamäť RAM
skontroluje ich kompatibilitu a zobrazí výsledok

Administrátor

pridá, upraví a zmaže komponent
pridá, upraví a zmaže kategóriu

## Plánované entity
User – id, meno, email, heslo (hash), rola.
Category – typ komponentu (CPU, základná doska, RAM...). Atribúty: id, názov.
Manufacturer – výrobca (AMD, Intel, ASUS...). Atribúty: id, názov. Dáta sa naimportujú pri prvom spustení.
Component – id, názov, popis, cena, socket, typ pamäte, category_id, manufacturer_id. Stĺpce socket a typ pamäte sa vypĺňajú len tam, kde dávajú zmysel, a podľa nich sa kompatibilita vyhodnocuje.

## Vzťahy medzi entitami
Category – Component (1:N): kategória obsahuje viac komponentov.
Manufacturer – Component (1:N): výrobca vyrába viac komponentov.

## Hlavné stránky aplikácie
Katalóg – úvodná stránka so zoznamom komponentov, filtrovaním a stránkovaním.
Kontrola kompatibility – výber komponentov a výsledok kontroly (len pre prihlásených).
Prihlásenie – prihlasovací formulár.
Registrácia – registračný formulár.
Admin panel – zoznam komponentov a kategórií s formulármi na pridanie a úpravu.

## Rozdelenie funkcionality
Základné funkcie

registrácia, prihlásenie, hashované heslá, role a autorizácia
CRUD nad komponentmi a kategóriami (admin)
AJAX filtrovanie a stránkovanie katalógu
AJAX kontrola kompatibility vybraných komponentov (socket procesora a dosky, typ pamäte)
validácia vstupov na klientovi aj serveri, ochrana proti SQL injection
responzívny dizajn, spustenie v Dockeri s ukážkovými dátami

Rozširujúce funkcie

upload fotky komponentu
kontrola príkonu zdroja
porovnávanie komponentov vedľa seba