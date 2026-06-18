#!/bin/bash
# Prepnout staging new.svuom.cz z php5.6-fpm na php8.1-fpm
set -euo pipefail

VHOST="/etc/apache2/sites-enabled/001b-new.www.conf"
BACKUP="${VHOST}.pre-php81-$(date +%Y%m%d)"

if [[ ! -f "$VHOST" ]]; then
  echo "Chybi $VHOST"
  exit 1
fi

cp -a "$VHOST" "$BACKUP"
sed -i 's|php5\.6-fpm\.sock|php8.1-fpm.sock|g' "$VHOST"

apache2ctl configtest
systemctl reload apache2

echo "Hotovo. Zaloha vhostu: $BACKUP"
grep -i 'SetHandler.*php' "$VHOST" | head -3
