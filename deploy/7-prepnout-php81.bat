@echo off
chcp 65001 >nul
cd /d "%~dp0.."

echo.
echo  ========================================
echo   SVUOM - Prepnuti staging na PHP 8.1
echo  ========================================
echo.
echo  1) stahne kod z GitHubu
echo  2) otestuje PDO pod php8.1
echo  3) prepne Apache vhost na php8.1-fpm
echo.

call deploy\_remote-sync-staging.bat
if errorlevel 1 goto :fail

echo.
echo --- test PDO (php8.1) ---
ssh -i ".deploy\svuom_staging" -o BatchMode=yes -o ConnectTimeout=30 root@glpi.svuom.cz "cd /var/www/html/new.www && php8.1 scripts/test-db-pdo.php && php8.1 scripts/test-db-php8.php"
if errorlevel 1 (
  echo.
  echo CHYBA: PDO test selhal — vhost se NEPREPINA.
  goto :fail
)

echo.
echo --- prepnuti vhostu na php8.1-fpm ---
ssh -i ".deploy\svuom_staging" -o BatchMode=yes -o ConnectTimeout=30 root@glpi.svuom.cz "bash /var/www/html/new.www/scripts/switch-staging-php81.sh"
if errorlevel 1 goto :fail

echo.
echo --- kontrola webu ---
curl -sI https://new.svuom.cz/ | findstr /i "HTTP robots"
echo.
echo Hotovo. Otevri: https://new.svuom.cz/
goto :end

:fail
echo.
echo Neco selhalo. Zkuste deploy\4-ssh-staging.bat a spustte rucne:
echo   php8.1 scripts/test-db-pdo.php
echo   bash scripts/switch-staging-php81.sh

:end
echo.
pause
