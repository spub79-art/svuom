#!/bin/bash
# Zapnout short_open_tag pro PHP 8.1 FPM (stary kod pouziva <? misto <?php)
set -euo pipefail

INI="/etc/php/8.1/fpm/php.ini"
BACKUP="${INI}.pre-short-tags-$(date +%Y%m%d)"

if [[ ! -f "$INI" ]]; then
  echo "Chybi $INI"
  exit 1
fi

cp -a "$INI" "$BACKUP"
sed -i 's/^short_open_tag = Off/short_open_tag = On/' "$INI"
sed -i 's/^;short_open_tag = Off/short_open_tag = On/' "$INI"

grep '^short_open_tag' "$INI"
systemctl restart php8.1-fpm
echo "Hotovo. Zaloha: $BACKUP"
