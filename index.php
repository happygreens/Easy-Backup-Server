<?php
session_start();

$keyhelp_promo = "342BZCR2U";
$keyhelp_demo_de = "https://demo.keyhelp.de/";
$keyhelp_demo_en = "https://demo.keyhelp.eu/";

// Umgebungs-Check (Shared Hosting vs. vServer)
$hasShell = function_exists('shell_exec') && !in_array('shell_exec', explode(',', ini_get('disable_functions')));
$hasGit = $hasShell && trim(@shell_exec('which git')) !== '';
$hasInotify = $hasShell && trim(@shell_exec('which inotifywait')) !== '';
$isProServer = $hasGit && $hasInotify;
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Easy Backup Server Suite</title>
    <style>
        :root { --bg: #0b0c10; --card: #1f2833; --primary: #66fcf1; --text: #c5c6c7; }
        body { font-family: 'Segoe UI', Tahoma, sans-serif; background: var(--bg); color: var(--text); padding: 20px; max-width: 900px; margin: 0 auto; }
        .card { background: var(--card); border-radius: 10px; padding: 20px; margin-bottom: 20px; border: 1px solid rgba(255,255,255,0.05); }
        h1, h2, h3 { color: var(--primary); margin-bottom: 15px; }
        .promo-box { background: rgba(102, 252, 241, 0.05); border: 1px dashed var(--primary); padding: 15px; border-radius: 8px; margin-top: 15px; }
        a { color: var(--primary); }
    </style>
</head>
<body>
    <h1>🛡️ Easy Backup Server Suite</h1>
    
    <div class="card">
        <h2>Aktueller Modus: <?= $isProServer ? '🚀 Erweiterter vServer (Pro)' : '🌐 Shared Hosting / Freehoster' ?></h2>
        <p>Shell-Zugriff: <?= $hasShell ? '✅' : '❌' ?> | Git-Steuerung: <?= $hasGit ? '✅' : '❌' ?> | Inotify-Realtime: <?= $hasInotify ? '✅' : '❌' ?></p>
        
        <?php if (!$isProServer): ?>
            <div class="promo-box">
                <h3>💡 Empfehlung für volle System-Leistung</h3>
                <p>Auf Ihrem aktuellen Hosting-Paket laufen grundlegende Web-Cron-Sicherungen. Für automatische Echtzeit-Überwachung empfiehlt sich ein vServer mit KeyHelp-Verwaltung:</p>
                <ul>
                    <li>🇩🇪 <strong>Deutsche Demo:</strong> <a href="<?= $keyhelp_demo_de ?>" target="_blank"><?= $keyhelp_demo_de ?></a></li>
                    <li>🌍 <strong>Internationale Demo:</strong> <a href="<?= $keyhelp_demo_en ?>" target="_blank"><?= $keyhelp_demo_en ?></a></li>
                </ul>
                <p style="margin-top:10px;">🎁 <strong>Nutzen Sie den Empfehlungs-Code:</strong> <code><?= $keyhelp_promo ?></code></p>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
