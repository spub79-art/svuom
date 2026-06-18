# Roadmap

> Poslední aktualizace: 2026-06-18

## Fáze 0 — Infrastruktura ✅ (hotovo)

**Další krok:** Fáze 1 — PDO vrstva místo `mysql_*`

- [x] Analýza stávajícího webu
- [x] Staging `new.svuom.cz` — DB `new.svuom`, uživatel `svuom`
- [x] Config podle domény (`config/app.php`)
- [x] Git repo + push na GitHub
- [x] SSH klíč pro deploy
- [x] Deploy skripty
- [x] **Git clone na staging serveru** (místo SFTP) — hotovo 2026-06-18
- [x] Ověřit deploy workflow end-to-end — hotovo 2026-06-18

---

## Fáze 1 — Nový základ (aktuální)

- [x] PDO + PHP 8.1 na stagingu
- [x] Front controller + hezké URL (`/cz/`, `/en/`) — 2026-06-18
- [x] Aktuality bez lightboxu (homepage blok + seznam + detail)
- [ ] Hledání FULLTEXT
- [ ] Tabulky `pages`, `redirects` + migrace obsahu
- [ ] Nový admin `/admin/`

Viz detail: **06-NAVRH-KOSTRY.md**

---

## Fáze 2 — Migrace obsahu do DB

- [ ] Inventář všech `zobraz` hodnot + URL
- [ ] Skript: extrakce HTML z PHP → tabulka `pages`
- [ ] Migrace stávajících `informace`, `employee`, `norms`
- [ ] Kontrola kolegou — sekce po sekcích
- [ ] Redirect mapa starých URL

---

## Fáze 3 — Admin panel

- [ ] CRUD stránky (CZ/EN, typ šablony)
- [ ] Aktuality (přepsat stávající admin)
- [ ] Kontakty
- [ ] **Normy** (nově — dnes jen Adminer)
- [ ] Upload dokumentů / obrázků
- [ ] WYSIWYG editor
- [ ] Krátký návod pro kolegu

---

## Fáze 4 — Šablony a design

- [ ] `layout` + `page` + `article` + `norm_list` šablony
- [ ] Obecné CSS komponenty
- [ ] Oprava grafických chyb (seznam z audit)
- [ ] Responzivita (pokud chybí)
- [ ] Zachovat vizuální identitu SVÚOM

---

## Fáze 5 — Compliance a kvalita

- [ ] Audit přístupnosti (WCAG základ)
- [ ] Cookies / GDPR banner pokud chybí
- [ ] Formuláře — validace, ochrana
- [ ] HTTPS, security headers
- [ ] Odstranit / zabezpečit Adminer na produkci
- [ ] SHA1 hesla → password_hash v adminu

---

## Fáze 6 — Produkce

- [ ] Paralelní běh staging vs produkce — finální review
- [ ] Git deploy na produkci
- [ ] Přepnutí PHP na produkci
- [ ] DNS / vhost — případně přejmenování staging ↔ prod
- [ ] Monitoring záloh DB

---

## Priorita obsahu (od zadavatele)

1. Aktuality  
2. Kontakty  
3. Normy / zkoušky  
4. Statické stránky (aktivity, certifikáty…)  
5. Publikace, konference, V&V  
