#!/bin/bash
echo "=== Easy Backup Server - Installation gestartet ==="

# Ordnerstruktur auf dem Zielserver anlegen
mkdir -p backups logs config

# Standardrechte setzen
chmod 755 index.php cron.php
chmod 777 logs backups

echo "Installation erfolgreich abgeschlossen!"
echo "Bitte öffnen Sie die index.php in Ihrem Browser oder richten Sie den Cronjob ein."
echo "Empfohlenes Server-Panel & Gutschein (342BZCR2U): https://demo.keyhelp.de/"
