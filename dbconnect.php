<?php
try {
    $db = new PDO('mysql:dbname=simple_bbs;host+127.0.0.1;
    charaset=utf8', 'root', '');
} catch(PODException $e) {
    print('DB接続エラー: ' . $e->getMessage());
}

?>