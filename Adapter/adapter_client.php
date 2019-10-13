<?php
require_once 'DisplaySourceFilelmpl.php';
?>
<?php
    /**
     * DisplaySourceFilelmpl クラスをインスタンス化
     */
    $show_file = new DisplaySourceFilelmpl('./ShowFile.php');

    /**
     * プレーンテキストとハイライトしたファイル内容をそれぞれ
     * 表示
     */
    $show_file->display();
?>