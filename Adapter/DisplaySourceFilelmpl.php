<?php
require_once 'DisplaySourceFile.php';
require_once 'ShowFile.php';
?>

<?php
/**
 * DisplaySourceFile実装したクラス
 */
class DisplaySourceFilelmpl implements DisplaySourceFile {

    /**
     * ShowFileクラスのインスタンスを保持する
     */
    private $show_file;

    /**
     * コンストラクタ 
     */
    public function __construct($filename) {
        $this->show_file = new ShowFile($filename);
    }

    /**
     * 指定されたソースファイルをハイライト表示
     */
    public function display() {
        $this->show_file->showHighlight();
    }
}
?>