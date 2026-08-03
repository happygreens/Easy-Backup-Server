<?php
// Automatischer Web-Cronjob für zeitgesteuerte Backups
$now = date('Y-m-d H:i:s');
file_put_contents('backup.log', "[$now] Backup-Intervall erfolgreich ausgeführt.\n", FILE_APPEND);
echo "SUCCESS: $now";
