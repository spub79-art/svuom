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

call "%~dp0_remote-sync-staging.bat"
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
