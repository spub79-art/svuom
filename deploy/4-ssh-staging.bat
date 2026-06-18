@echo off
chcp 65001 >nul
cd /d "%~dp0.."

echo.
echo  Pripojuji na staging server (glpi.svuom.cz) ...
echo  Ukonceni: napis exit
echo.

ssh -i ".deploy\svuom_staging" root@glpi.svuom.cz

pause
