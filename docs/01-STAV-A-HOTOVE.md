# Aktuální stav a co je hotové

> Poslední aktualizace: 2026-06-18

## Prostředí

| Prostředí | URL | DocumentRoot | DB | PHP (web) |
|-----------|-----|--------------|-----|-----------|
| **Staging** | https://new.svuom.cz | `/var/www/html/new.www` | `new.svuom` (uživatel `svuom`) | **přepínáme na 8.1-fpm** |
| **Produkce** | https://www.svuom.cz | `/var/www/html/www` | `svuom` | pravděpodobně 5.6-fpm (neověřeno v této relaci) |

**Server:** `glpi.svuom.cz` (SSH jako root, klíč v `.deploy/svuom_staging` — **mimo git**)

**Nainstalované PHP na serveru:** 5.6, 7.3, 8.1 (CLI default), 8.4, 8.5 — aktivní php-fpm: 5.6, 7.3, 8.1

Staging vhost (`001b-new.www.conf`) explicitně používá `php5.6-fpm.sock` — **cíl: přepnout na `php8.1-fpm.sock`** po ověření PDO vrstvy (`scripts/switch-staging-php81.sh`).

---

## Co je hotové ✅

### Analýza původního webu
- Monolitický PHP web (~2005, DirectSolution / L. Pacák)
- Vstup: `index.php` + routing `?zobraz=...&lang=cz|en` (~80+ stránek)
- Většina obsahu natvrdo v `echo` v `system/**/*.php`
- Dynamický obsah v MySQL: `informace`, `employee`, `norms`, `engnorms`, `users`
- Admin jen pro aktuality + kontakty: `service/admin.php`
- Normy bez admin UI — jen Adminer
- Média: `images/` (~102 MB), `prilohy/` (uploady aktualit)
- Vedlejší app: `trubky/` (kalkulačka)

### Konfigurace podle domény
- `config/app.php` — detekce staging/production/local podle `HTTP_HOST`
- `config/secrets.php` — hesla DB (**mimo git**)
- `system/dbconnection.php`, `service/admin.php` — čtou z configu
- Oranžový **STAGING** pruh na `new.svuom.cz`

### Git
- Lokální repo, větev `main`
- Remote: `https://github.com/spub79-art/svuom.git` — **pushnuto**
- `.gitignore`: secrets, sftp.json, .deploy/, *.sql
- Velikost projektu ~112 MB — **OK pro GitHub free** (limit 100 MB/soubor, doporučeno <1 GB repo)

### Deploy nástroje (připravené, částečně použité)
- `scripts/deploy.ps1` — commit + push + git pull na serveru
- `scripts/deploy-staging.sh` — git pull na serveru
- `scripts/server-init-staging.sh` — jednorázový přechod SFTP → git clone
- `scripts/ssh-staging.ps1` — SSH s deploy klíčem
- SFTP `uploadOnSave` **vypnuto**

### SSH
- Klíč: `.deploy/svuom_staging` (oprávnění icacls jen pro uživatele)
- Veřejný klíč na serveru v `authorized_keys` — **funguje**

### Staging web
- **Běží** z **git clone** (`/var/www/html/new.www/.git`)
- Záloha před přepnutím: `/var/www/html/new.www.pre-git-bak`
- `config/secrets.php` na serveru obnoven po clone
- **Neindexování:** `robots-staging.txt`, `X-Robots-Tag` + meta `noindex` jen na `new.svuom.cz` (produkce beze změny)

---

## Co **není** hotové ❌

- [x] **Git deploy na staging serveru** — hotovo 2026-06-18 (clone + záloha `new.www.pre-git-bak`)
- [x] **Deploy workflow end-to-end** — ověřeno 2026-06-18 (push z PC → `git fetch` + `reset --hard` na serveru; `deploy\` BAT skripty)
- [ ] Migrace `mysql_*` → PDO — **rozpracováno:** `system/mysql_pdo.php` (polyfill pro PHP 8+)
- [ ] Přepnutí staging vhostu na php8.1-fpm (`scripts/switch-staging-php81.sh`)
- [ ] Nová architektura (šablony, admin, migrace obsahu)
- [ ] Inventář URL + redirecty
- [ ] Audit přístupnosti / legislativy
- [ ] Git init na produkci (až po dokončení stagingu)

---

## Jednorázový příkaz — přepnout staging na git

**Hotovo** — staging běží z git clone. Pro budoucí reference (skript z PC, kvůli CRLF používat po `git pull` skript už ze serveru):

```powershell
cd c:\www\svuom
Get-Content .\scripts\server-init-staging.sh -Raw | ssh -i ".deploy\svuom_staging" root@glpi.svuom.cz "bash -s -- https://github.com/spub79-art/svuom.git"
```

Varování `$'\r': command not found` na konci je neškodné (Windows CRLF); po `.gitattributes` už by se nemělo opakovat.

---

## Běžný workflow po git init

**Nejjednodušeji — dvojklik ve složce `deploy\`:**

| Soubor | Co dělá |
|--------|---------|
| `deploy\1-commit-push-staging.bat` | commit + push + deploy na staging |
| `deploy\2-push-staging.bat` | push + deploy (už máš commit) |
| `deploy\3-staging-pull-only.bat` | jen pull na serveru |
| `deploy\4-ssh-staging.bat` | SSH na server |
| `deploy\5-kontrola-staging.bat` | robots.txt, hlavičky, git stav |
| `deploy\7-prepnout-php81.bat` | deploy + test PDO + přepnutí stagingu na PHP 8.1 |

Nápověda: `deploy\README.txt`

Ručně (PowerShell):

```powershell
cd c:\www\svuom
git push
# Na serveru se používá reset --hard (viz deploy\_remote-sync-staging.bat), ne pull — kvůli konfliktům s lokálními změnami na serveru
ssh -i ".deploy\svuom_staging" root@glpi.svuom.cz "cd /var/www/html/new.www && git fetch origin main && git reset --hard origin/main"
```

---

## Důležité soubory (tajné — nikdy do gitu)

| Soubor | Účel |
|--------|------|
| `config/secrets.php` | Hesla DB per prostředí |
| `.deploy/svuom_staging` | SSH privátní klíč |
| `.vscode/sftp.json` | SFTP přístup (záloha, nepoužívat jako primární deploy) |

Šablona: `config/secrets.example.php`
