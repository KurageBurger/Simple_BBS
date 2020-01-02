<?php
try {
    $db = new PDO('mysql:dbname=simple_bbs;host=localhost;
    charset=utf8', 'root', 'root');
} catch(PODException $e) {
    print('DB接続エラー: ' . $e->getMessage());
}

?>