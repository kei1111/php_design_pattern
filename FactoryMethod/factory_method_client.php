<?php
require_once 'ReaderFactory.php';
?>
<html lang='ja'>
<head>
    <title>作曲家と作品</title>
</head>
<body>
<?php
    /**
     * 入力ファイル
     */
    $filename = 'music.csv';
    $filename = 'music.xml';

    $factory = new ReaderFactory();
    $data = $factory->create($filename);
    $data->read();
    $data->display();
?>
</body>
</html>