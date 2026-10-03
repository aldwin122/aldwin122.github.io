<?php
$pdo = new PDO('mysql:host=localhost;dbname=scs_portal;charset=utf8mb4', 'root', '');
$rows = $pdo->query("SELECT id, username, full_name, avatar FROM users WHERE role='parent'")->fetchAll(PDO::FETCH_ASSOC);
foreach ($rows as $r) {
    echo $r['id'] . ' | ' . $r['username'] . ' | avatar=' . ($r['avatar'] ?? 'NULL') . PHP_EOL;
}
