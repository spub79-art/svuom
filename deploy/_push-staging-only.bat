@echo off
REM Interni - vola se z 1-commit-push-staging.bat
chcp 65001 >nul
cd /d "%~dp0.."

git push origin main
if errorlevel 1 exit /b 1

ssh -i ".deploy\svuom_staging" -o BatchMode=yes -o ConnectTimeout=20 root@glpi.svuom.cz "cd /var/www/html/new.www && git pull --ff-only origin main && echo Deploy hotov: && git rev-parse --short HEAD"
exit /b %ERRORLEVEL%
