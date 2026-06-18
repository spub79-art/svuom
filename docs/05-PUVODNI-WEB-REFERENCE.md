# Reference — původní web (před přestavbou)

> Rychlý technický rozbor pro pokračování v nové relaci.

## Routing

- Soubor: `index.php` (~1900 řádků)
- Parametry: `?zobraz=<stranka>&lang=cz|en`
- Default: `zobraz=home`, `lang=cz`
- Switch v `index.php` volá funkce z `system/**/*.php`

## Obsah — kde co je

| Typ | Umístění | Admin? |
|-----|----------|--------|
| Texty stránek | `system/**/*.php` v `echo` | ❌ |
| Aktuality | DB `informace` | ✅ `service/admin.php` |
| Kontakty | DB `employee` | ✅ |
| Normy CZ | DB `norms` | ❌ (Adminer) |
| Normy EN | DB `engnorms` | ❌ |
| Obrázky/PDF | `images/**` | ❌ |
| Přílohy aktualit | `prilohy/` | částečně přes admin |

## DB tabulky (známé)

- `informace` — title, topic, issue_date, pdf, pic, lang (0=cz, 1=en)
- `employee` — prijmeni, jmeno, titul, tel, mobil, email, zarazeni, misto (1=Holešovice, 0=Jenerálka)
- `norms` — typeid, poradi, subject, descr, idnorm, idnum, pracoviste…
- `engnorms` — anglická verze
- `users` — user_name, user_pass (SHA1), email, user_right

## Technické dluhy

- `mysql_*` — odstraněno v PHP 7+
- Krátké tagy `<?` — vyžaduje `short_open_tag=On` v `.htaccess`
- SQL injection v admin dotazech
- SHA1 hesla
- Atomz search (externí, nefunkční?)
- Adminer veřejně dostupný
- Credentials dříve v kódu (nyní v `config/secrets.php`)

## Klíčové soubory

```
index.php                 # front + routing
system/dbconnection.php   # DB (nyní přes config)
system/menutop.php        # hlavní menu
system/navigace.php       # breadcrumbs
system/home.php           # homepage + formulář
service/admin.php         # admin rozhraní
config/app.php            # prostředí podle domény
```

## Sekce webu (zobraz hodnoty — výběr)

`home`, `aktivity`, `akrzk`, `korozniing`, `projektyvav`, `konference`, `publikace`, `prirucky`, `knihy`, `uzitnevzory`, `kontakty`, `seznamzam`, `odkazy`, `oceneni`, `ospolecnosti`, `tnakrzk`, `anotace1`… (celkem ~80+)

Plný seznam: `grep "case '" index.php` v kořeni projektu.

## Apache staging

- Config: `/etc/apache2/sites-available/001b-new.www.conf`
- PHP: `php5.6-fpm.sock`
- DocumentRoot: `/var/www/html/new.www`
