@echo off
chcp 65001 >nul
cd /d "%~dp0.."

echo.
echo  ========================================
echo   SVUOM - Commit, push a deploy staging
echo  ========================================
echo.

git status -sb
echo.

set /p MSG="Commit message (prazdne = zrusit): "
if "%MSG%"=="" (
    echo Zruseno.
    pause
    exit /b 0
)

git add -A
git commit -m "%MSG%"
if errorlevel 1 (
    echo Commit selhal nebo neni co commitovat.
    pause
    exit /b 1
)

call "%~dp0_push-staging-only.bat"
exit /b %ERRORLEVEL%
