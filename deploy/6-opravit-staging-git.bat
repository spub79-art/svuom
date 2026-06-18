@echo off
chcp 65001 >nul
echo.
echo  Oprava staging gitu (srovnani s GitHubem)...
echo.
call "%~dp0_remote-sync-staging.bat"
if errorlevel 1 (
    echo SELHALO.
) else (
    echo.
    echo Hotovo. Zkuste znovu deploy\2-push-staging.bat
)
echo.
pause
