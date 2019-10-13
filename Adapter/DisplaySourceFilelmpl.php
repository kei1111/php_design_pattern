<?php
require_once 'DisplaySourceFile.php';
require_once 'ShowFile.php';
?>

<?php
/**
 * DisplaySourceFile実装したクラス
 */
class DisplaySourceFilelmpl extends ShowFile implements DisplaySourceFile {
    /**
     * コンストラクタ 
     */
    public function __construct($filename) {
        parent::__construct($filename);
    }
    /**
     * 指定されたソースファイルをハイライト表示
     */
    public function display() {
        parent::showHighlight();
    }
}
?>