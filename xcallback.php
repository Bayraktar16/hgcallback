<?php
// ------------------------------
// Twitter OAuth2 Callback Logger
// Hazırlayan: BAYRAKTAR16
// ------------------------------

header('Content-Type: text/plain; charset=utf-8');

// ?code gelmemişse uyarı ver
if (!isset($_GET['code'])) {
    echo "Callback çalıştı fakat 'code' parametresi gelmedi.\n";
    exit;
}

$code = $_GET['code'];
$time = date("Y-m-d H:i:s");

// Kayıt dosyası
$logFile = "last_code.txt";

// Kayıt satırı
$logEntry = "[$time] CODE: $code\n";

// Dosyaya yaz
file_put_contents($logFile, $logEntry, FILE_APPEND);

// Ekrana sonuç göster
echo "Twitter bağlantısı başarılı!\n";
echo "CODE: $code\n\n";
echo "Log dosyasına kaydedildi: $logFile";
?>
