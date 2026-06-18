# Záznam rozhodnutí

> Architektonické a procesní rozhodnutí — aby se neopakovaly debaty v nových relacích.

| Datum | Rozhodnutí | Důvod |
|-------|------------|-------|
| 2026-06 | **Vlastní modernizace**, ne WordPress/CMS | Specifická struktura (normy, 80+ technických stránek), obavy z pluginů a updatů, CZ/EN |
| 2026-06 | **Staging first** — `new.svuom.cz`, ne lokální Docker | Kolega kontroluje na místě, stejné prostředí jako produkce |
| 2026-06 | **Hybrid C**, ne postupný hybrid D | Chce rovnou dobrou administraci, ne „přežít a pak řešit“ |
| 2026-06 | Config podle **HTTP_HOST** | Jeden kód, automaticky staging vs produkce |
| 2026-06 | `config/secrets.php` **mimo git** | Bezpečnost |
| 2026-06 | **Git** místo SFTP sync | Verzování, deploy přes `git pull` |
| 2026-06 | GitHub **spub79-art/svuom** privátní | ~112 MB, vejde se na free tier |
| 2026-06 | **WYSIWYG** editor pro kolegu, ne Markdown | Stávající obsah je HTML, menší bariéra |
| 2026-06 | Design **oddělit** — nejdřív obsah z DB a kostra, vizuál až potom | Nemotat refaktor se starým CSS |
| 2026-06 | **Nové URL** `/cz/...`, redirect ze starých `?zobraz=` | SEO, čistší web, ne držet legacy query |
| 2026-06 | Starý `system/*.php` **nahradit**, ne obalovat | Stejný autor jako minule — většina kódu na vyhození |
| 2026-06 | Aktuality **bez lightboxu** — seznam + detail stránka | Lightbox ne pro novinky |
| 2026-06 | **Nový admin** (`/admin/`), ne rozšiřovat `service/admin.php` | Starý admin stejně legacy; přepsat CRUD čistě, stejné tabulky |
| 2026-06 | Data v DB, **soubory jako odkazy** | Správný model pro admin a zálohy |
| 2026-06 | PHP **8.1 na stagingu** — neudržovat dual stack s 5.6 | 5.6 brání aktualizaci serveru; PDO polyfill + přepnutí vhostu |
| 2026-06 | `trubky/` nechat bokem | Malá samostatná app, nízká priorita |

---

## Zamítnuté alternativy

| Alternativa | Proč ne |
|-------------|---------|
| WordPress + WPML | Riziko, nesoulad s normami, migrace 80 stránek |
| Pouze PHP 8 patch bez adminu | Kolega pořád edituje soubory |
| Čistý SFTP workflow | Nepřehledné, bez verzí |
| Obalit staré PHP funkce a postupně migrovat | Zdvojuje práci; legacy jen dočasný most |
| Lightbox pro aktuality | Špatná UX pro novinky |
| Atomz search | Externí služba nefunguje |

---

## Kdo co dělá

| Role | Odpovědnost |
|------|-------------|
| Zadavatel | Rozhodnutí, přístupy, review, produkční přepnutí |
| Kolega | Běžná správa obsahu v adminu, kontrola sekcí |
| AI / vývoj | Implementace, migrace, skripty, většina kódu |
