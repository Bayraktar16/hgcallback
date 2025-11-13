<?php
// Twitter OAuth2 Callback
if (!isset($_GET['code'])) {
    echo "Callback çalıştı fakat 'code' gelmedi.";
    exit;
}

$code = $_GET['code'];

file_put_contents("last_code.txt", date("Y-m-d H:i:s") . " => CODE: " . $code . "\n", FILE_APPEND);

echo "Twitter bağlantısı başarılı! CODE: " . htmlspecialchars($code);
?>
