# Navrhovaná architektura (cílový stav)

> Poslední aktualizace: 2026-06-18  
> Status: **návrh** — neimplementováno

## Principy

1. **MVC-like oddělení** — data / logika / prezentace
2. **Šablony** pro layout a typy stránek
3. **Jedna DB vrstva** (PDO) — žádné `mysql_*`
4. **i18n v jádře** — každý obsahový záznam CZ + EN (nebo vazba párů)
5. **Soubory mimo DB** — v DB jen metadata + cesta k souboru
6. **Společné komponenty** — menu, navigace, breadcrumbs, upload, paginace

---

## Navrhovaná struktura adresářů (budoucí)

```
/
├── public/              # document root (Apache)
│   ├── index.php        # front controller
│   ├── assets/          # CSS, JS, statické assety nového designu
│   └── uploads/         # nahrané soubory (mimo git nebo gitignored)
├── app/
│   ├── Config/
│   ├── Database/
│   ├── Models/          # Page, Article, Norm, Employee, Project…
│   ├── Services/        # Upload, Mail, I18n, Navigation
│   └── Controllers/
├── templates/
│   ├── layouts/         # base.html.php
│   ├── pages/           # home, generic, activity, project…
│   ├── partials/        # menu, footer, breadcrumb, staging-banner
│   └── admin/
├── config/              # app.php, secrets.php (stávající)
├── legacy/              # dočasně starý kód pro referenci / redirecty
└── docs/                # tato dokumentace
```

*Přesná struktura se může upravit — důležitý je princip, ne název složky.*

---

## Šablony obsahu (návrh typů)

| Typ | Popis | Data z DB | Příklad ze současného webu |
|-----|-------|-----------|------------------------------|
| `layout` | HTML kostra, menu, patička | — | dnes v `index.php` |
| `page` | Statická textová stránka CZ/EN | `pages` | aktivity, o společnosti |
| `article` | Aktualita / novinka | `informace` (rozšířit) | aktuality na homepage |
| `employee_list` | Kontakty | `employee` | seznamzam |
| `norm_list` | Tabulka norem | `norms` / `engnorms` | tnakrzk, anotace |
| `norm_detail` | Detail normy | `norms` | anotace1, anotace2… |
| `project` | V&V projekt | nová tabulka nebo `pages` s typem | projektyvav |
| `publication` | Publikace / kniha | `pages` nebo vlastní tabulka | publikace, knihy |
| `document` | PDF odkaz + popis | soubor + metadata | certifikáty v `images/` |

---

## Databáze — stávající + plánované

### Existující tabulky
- `informace` — aktuality (title, topic, issue_date, pdf, pic, lang)
- `employee` — zaměstnanci
- `norms` — české normy/zkoušky
- `engnorms` — anglické normy
- `users` — admin uživatelé

### Plánované (návrh)
- `pages` — slug, lang, type, title, body_html, meta, published_at, updated_at
- `page_types` — nebo enum: generic, activity, project, publication…
- `media` — filename, path, mime, size, uploaded_at (volitelně)
- `page_media` — vazba stránka ↔ soubor
- `redirects` — old_url → new_url (SEO)

Migrace: skript extrahuje HTML z `system/**/*.php` do `pages`.

---

## CSS strategie

- **Design tokens** — barvy, fonty, spacing v jednom souboru (`variables.css`)
- **Layout** — grid, kontejner, sloupce
- **Komponenty** — `.btn`, `.card`, `.table`, `.breadcrumb` (obecné)
- **Utility** — `.text-justify`, `.mt-2` (střídmě)
- Stávající `css/layout.css`, `topic.css` — referenční podklad, postupně nahradit

---

## Admin (cílový)

Jednoduchý WYSIWYG editor (TinyMCE nebo podobný):

- Stránky (CZ/EN, výběr šablony/typu)
- Aktuality
- Kontakty
- Normy (dnes chybí!)
- Upload souborů / PDF
- Uživatelé (rozšířit stávající `users`)

---

## Kompatibilita URL

Fáze 1: zachovat `index.php?zobraz=X&lang=Y` + 301 redirect tabulka  
Fáze 2 (volitelně): `/cz/aktivity/akrzk` — hezčí URL

---

## PHP verze — migrační plán

1. Staging na **5.6** — referenční bod, git deploy
2. Refaktor DB na **PDO**
3. Přepnout vhost na **php8.1-fpm**
4. Otestovat celý web
5. Produkce až po schválení kolegou

---

## Co neřešit hned

- `trubky/` — minimální úpravy, samostatná mini-app
- `adminer/` — na produkci zavřít / odstranit
- Atomz search — mrtvé, nahradit vlastním nebo vyhledáváním v DB
