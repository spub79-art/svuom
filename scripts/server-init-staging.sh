#!/bin/bash
# Jednorazova inicializace git deploy na staging serveru.
# Spustit NA SERVERU: bash server-init-staging.sh <GIT_REPO_URL>
set -euo pipefail

REPO_URL="${1:-}"
TARGET="/var/www/html/new.www"
BACKUP="/var/www/html/new.www.pre-git-bak"

if [[ -z "$REPO_URL" ]]; then
  echo "Pouziti: bash $0 <GIT_REPO_URL>"
  echo "Priklad: bash $0 git@github.com:org/svuom-web.git"
  exit 1
fi

if [[ -d "$TARGET/.git" ]]; then
  echo "Git uz v $TARGET existuje — nic nedelam."
  exit 0
fi

echo "Zaloha $TARGET -> $BACKUP"
cp -a "$TARGET" "$BACKUP"

SECRETS_TMP="/tmp/svuom-secrets.php"
if [[ -f "$TARGET/config/secrets.php" ]]; then
  cp "$TARGET/config/secrets.php" "$SECRETS_TMP"
fi

echo "Clone $REPO_URL"
rm -rf "$TARGET"
git clone "$REPO_URL" "$TARGET"

if [[ -f "$SECRETS_TMP" ]]; then
  cp "$SECRETS_TMP" "$TARGET/config/secrets.php"
  echo "Obnoven config/secrets.php"
fi

chmod +x "$TARGET/scripts/deploy-staging.sh"

# Git 2.35+: root muze pull i kdyz je vlastnik www-data
git config --global --add safe.directory "$TARGET"

chown -R www-data:www-data "$TARGET" 2>/dev/null || true

echo "Hotovo. Otestujte: https://new.svuom.cz/"
