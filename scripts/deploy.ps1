# Deploy: git push + git pull na staging serveru
# Pouziti: .\scripts\deploy.ps1 [-Message "popis zmeny"]
param(
    [string]$Message = ""
)

$ErrorActionPreference = "Stop"
$Root = Split-Path $PSScriptRoot -Parent
$Key = Join-Path $Root ".deploy" "svuom_staging"

Set-Location $Root

$status = git status --porcelain
if ($status) {
    if (-not $Message) {
        $Message = Read-Host "Commit message"
    }
    if (-not $Message) {
        throw "Chybi commit message"
    }
    git add -A
    git commit -m $Message
}

$branch = git rev-parse --abbrev-ref HEAD
git push origin $branch

ssh -i $Key -o BatchMode=yes root@glpi.svuom.cz "cd /var/www/html/new.www && git pull --ff-only origin $branch && echo Deploy: `$(git rev-parse --short HEAD)"
