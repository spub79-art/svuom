@echo off
chcp 65001 >nul
cd /d "%~dp0.."

echo.
echo  ========================================
echo   SVUOM - Kontrola staging (robots, web)
echo  ========================================
echo.

echo --- robots.txt ---
curl -s https://new.svuom.cz/robots.txt
echo.
echo.

echo --- X-Robots-Tag hlavicka ---
curl -sI https://new.svuom.cz/ | findstr /i "robots HTTP"
echo.

echo --- git na serveru ---
ssh -i ".deploy\svuom_staging" -o BatchMode=yes -o ConnectTimeout=20 root@glpi.svuom.cz "cd /var/www/html/new.www && git rev-parse --short HEAD && git status -sb"

echo.
pause
