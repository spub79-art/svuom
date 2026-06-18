@echo off
chcp 65001 >nul
cd /d "%~dp0.."

echo.
echo  ========================================
echo   SVUOM - Jen pull na staging serveru
echo  ========================================
echo.

call "%~dp0_remote-sync-staging.bat"

if errorlevel 1 (
    echo.
    echo SELHALO.
    pause
    exit /b 1
)

echo.
pause
exit /b 0
