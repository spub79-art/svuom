SVUOM - Deploy skripty (dvojklik v Průzkumníku)
==============================================

Slozka: c:\www\svuom\deploy\

1-commit-push-staging.bat
  Zmeny ulozit (commit), push na GitHub, stahnout na new.svuom.cz
  -> NEJCASTEJI POUZITE

2-push-staging.bat
  Uz mas commit - jen push + pull na staging

3-staging-pull-only.bat
  Jen git pull na serveru (bez push z PC)

4-ssh-staging.bat
  Prihlaseni na server pres SSH (terminal)

5-kontrola-staging.bat
  Zkontroluje robots.txt, hlavicky a stav gitu na serveru

6-opravit-staging-git.bat
  Jednorazove: server srovna s GitHub (kdyz deploy hlasi konflikt)

7-prepnout-php81.bat
  Deploy + test PDO + prepnuti staging z PHP 5.6 na PHP 8.1

_remote-sync-staging.bat
  Interni prikaz pro sync serveru

_push-staging-only.bat
  Interni - nepouzivat primo


Tip: Zkratku na slozku deploy si muzete pretahnout na Plochu.


Po deploy: https://new.svuom.cz/
