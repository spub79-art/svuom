# Cíl projektu — SVÚOM web

> Poslední aktualizace: 2026-06-18  
> Tento soubor shrnuje záměr zadavatele a směr přestavby.

## Hlavní cíl

Předělat původní zastaralé, z velké části **nedynamické** stránky **svuom.cz** na moderní, spravovatelný web.

Veškerý vývoj a testování probíhá v **odděleném testovacím prostředí** (staging), produkce zůstává nedotčená do finálního přepnutí.

---

## Požadavky zadavatele (vlastními slovy + upřesnění)

### 1. Oddělení designu od funkčnosti

- Design **kompletně oddělený** od logiky a dat.
- Preferovaná cesta: **šablony (templates)** — např.:
  - layout / celkový vzhled webu
  - obecná stránka
  - článek / aktualita
  - projekt
  - kontakt / seznam zaměstnanců
  - katalog norem / zkoušek
- **CSS co nejobecnější** — ne samostatný styl pro každý kousek textu.
- Stávající vzhled **nezavrhovat** — uživatele neuráží, ale technicky ho oddělit od kódu.

### 2. Šablony podle typu obsahu

- Různé typy obsahu = různé šablony (projekty, publikace, aktivity, normy…).
- **Data v databázi** — texty, metadata, strukturované záznamy.
- **Obrázky a dokumenty** — jako soubory na disku / úložišti, v DB jen **odkaz (cesta/URL)**.
- Možnost **nahrávat dokumenty** k článkům, stránám atd. (admin).

### 3. Sdílená logika

- Kde to jde: **společné funkce** napříč webem (DB, šablony, upload, i18n, navigace…).
- Žádná kopie stejné logiky v desítkách PHP souborů jako dnes.

### 4. Kvalita a compliance

- **Grafické chyby** na současných stránkách — opravit při přestavbě.
- **Legislativní nesoulad** (přístupnost, cookies, GDPR, formální náležitosti…) — opravit, kde se při auditu najde.
- Seznam konkrétních problémů zatím **nekompletní** — doplnit průběžně při migraci a review kolegou.

### 5. Provoz a správa

- Správa obsahu přejde na **kolegu** (technicky zdatný, se supportem zadavatele).
- **Dvojjazyčnost CZ/EN** — povinná (výzkumná organizace, zahraniční spolupráce).
- **Minimální dlouhodobá práce** pro zadavatele — většina implementace na vývojáři/AI.
- **Bez hotového CMS** (WordPress apod.) — vlastní řešení na míru, nižší riziko pluginů a nesouladu se strukturou webu.

### 6. Technický provoz

- Vlastní server, více verzí PHP (5.6–8.5); cílově **PHP 8.1+**.
- Produkce: `www.svuom.cz` / `svuom.cz`
- Staging: `new.svuom.cz` → `/var/www/html/new.www`
- Git: https://github.com/spub79-art/svuom (privátní)

---

## Co záměr **není**

- Radikální redesign „od nuly“ bez potřeby.
- WordPress / univerzální CMS.
- Ztráta obsahu nebo URL bez redirectů.
- Úpravy produkce během vývoje.

---

## Otevřené otázky (doplnit při práci)

- [ ] Konkrétní legislativní checklist (GDPR, cookies, eAccessibility Act…)
- [ ] Inventář grafických chyb (kolega + průběžný audit)
- [ ] Priorita sekcí po jádru (aktuality, kontakty, normy už diskutováno)
- [ ] URL struktura: zachovat `?zobraz=` + redirect, nebo hezčí `/cz/...`?
- [ ] Editor v adminu: WYSIWYG (doporučeno TinyMCE-style)
- [ ] Co s `trubky/` kalkulačkou — integrovat nebo nechat samostatně?
