#!/bin/bash
# Deploy na staging: spustit na serveru v /var/www/html/new.www
set -euo pipefail

cd "$(dirname "$0")/.."

REPO_ROOT="$(pwd)"
git config --global --add safe.directory "$REPO_ROOT" 2>/dev/null || true

if [[ ! -f config/secrets.php ]]; then
  echo "Chybi config/secrets.php — zkopirujte z config/secrets.example.php"
  exit 1
fi

git fetch origin main
git reset --hard origin/main

echo "Deploy hotov: $(git rev-parse --short HEAD)"
