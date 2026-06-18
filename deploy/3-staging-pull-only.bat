@echo off
chcp 65001 >nul
cd /d "%~dp0.."

echo.
echo  ========================================
echo   SVUOM - Jen pull na staging serveru
echo  ========================================
echo.

ssh -i ".deploy\svuom_staging" -o BatchMode=yes -o ConnectTimeout=20 root@glpi.svuom.cz "cd /var/www/html/new.www && git pull --ff-only origin main && echo. && echo Deploy hotov: && git rev-parse --short HEAD"

if errorlevel 1 (
    echo.
    echo SELHALO.
    pause
    exit /b 1
)

echo.
pause
exit /b 0
