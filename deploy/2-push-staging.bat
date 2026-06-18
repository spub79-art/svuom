@echo off
chcp 65001 >nul
cd /d "%~dp0.."

echo.
echo  ========================================
echo   SVUOM - Push na GitHub + pull staging
echo  ========================================
echo.

git push origin main
if errorlevel 1 (
    echo.
    echo PUSH SELHAL - zkontrolujte sit a prihlaseni k GitHubu.
    pause
    exit /b 1
)

echo.
echo Push OK. Stahuji na server new.svuom.cz ...
echo.

ssh -i ".deploy\svuom_staging" -o BatchMode=yes -o ConnectTimeout=20 root@glpi.svuom.cz "cd /var/www/html/new.www && git pull --ff-only origin main && echo. && echo Deploy hotov: && git rev-parse --short HEAD"

if errorlevel 1 (
    echo.
    echo DEPLOY SELHAL - SSH nebo git pull na serveru.
    pause
    exit /b 1
)

echo.
echo ========================================
echo  Hotovo. Otestujte: https://new.svuom.cz/
echo ========================================
echo.
pause
exit /b 0
