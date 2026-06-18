@echo off
chcp 65001 >nul
cd /d "%~dp0.."

echo.
echo  ========================================
echo   SVUOM - Prepnuti staging na PHP 8.1
echo  ========================================
echo.

call "%~dp0_remote-sync-staging.bat"
if errorlevel 1 goto fail

echo.
echo --- test PDO php8.1 ---
ssh -i ".deploy\svuom_staging" -o BatchMode=yes -o ConnectTimeout=30 root@glpi.svuom.cz "cd /var/www/html/new.www && php8.1 scripts/test-db-pdo.php && php8.1 scripts/test-db-php8.php"
if errorlevel 1 goto fail_pdo

echo.
echo --- prepnuti vhostu na php8.1-fpm ---
ssh -i ".deploy\svuom_staging" -o BatchMode=yes -o ConnectTimeout=30 root@glpi.svuom.cz "bash /var/www/html/new.www/scripts/switch-staging-php81.sh"
if errorlevel 1 goto fail

echo.
echo --- short_open_tag pro stary kod ---
ssh -i ".deploy\svuom_staging" -o BatchMode=yes -o ConnectTimeout=30 root@glpi.svuom.cz "bash /var/www/html/new.www/scripts/enable-php81-short-tags.sh"
if errorlevel 1 goto fail

echo.
echo --- kontrola webu ---
curl -sI https://new.svuom.cz/ | findstr /i "HTTP robots"
echo.
echo Hotovo: https://new.svuom.cz/
goto end

:fail_pdo
echo.
echo CHYBA: PDO test selhal - vhost se NEPREPINA.
goto fail

:fail
echo.
echo Neco selhalo. Zkuste deploy\4-ssh-staging.bat a spustte rucne:
echo   php8.1 scripts/test-db-pdo.php
echo   bash scripts/switch-staging-php81.sh
echo   bash scripts/enable-php81-short-tags.sh

:end
echo.
pause
exit /b %ERRORLEVEL%