@echo off
REM Interni - vola se z 1-commit-push-staging.bat
chcp 65001 >nul
cd /d "%~dp0.."

git push origin main
if errorlevel 1 exit /b 1

call "%~dp0_remote-sync-staging.bat"
exit /b %ERRORLEVEL%
