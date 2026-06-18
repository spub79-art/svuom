@echo off
REM Synchronizace staging serveru s GitHub (staging = presna kopie repa)
REM Pouziva git reset --hard - lokální úpravy souborů na serveru se zahodí.
REM Nezasahuje do: config/secrets.php, necommitnutých uploadů v prilohy/

chcp 65001 >nul
cd /d "%~dp0.."

ssh -i ".deploy\svuom_staging" -o BatchMode=yes -o ConnectTimeout=20 root@glpi.svuom.cz "cd /var/www/html/new.www && git config --global --add safe.directory /var/www/html/new.www 2>/dev/null; git fetch origin main && git reset --hard origin/main && echo Deploy hotov: && git rev-parse --short HEAD"
exit /b %ERRORLEVEL%
