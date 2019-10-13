<?php
require_once 'DisplaySourceFile.php';
?>

<?php
/**
 * 指定されたファイルの内容を表示するクラス
 */
class ShowFile implements DisplaySourceFile {
    /**
     * 内容を表示するファイル名
     * @access private
     */
    private $filename;

    /**
     * コンストラクタ
     * 
     * @param string ファイル名
     * @throws Exception
     */
    public function __construct($filename) {
        if (!is_readable($filename)) {
            throw new Exception('file "'. $filename . '" is not readable !');
        }
        $this->filename = $filename;
    }
    
    /**
     * プレーンテキストとして表示
     */
    public function showPlain() {
        echo '<pre>';
        echo htmlspecialchars(file_get_contents($this->filename),
                ENT_QUOTES, 'euc-jp');
        echo '</pre>';
    }

    /**
     * キーワードをハイライトして表示
     */
    public function showHighlight() {
        highlight_file($this->filename);
    }

    /**
     * キーワードをハイライトして表示
     * DisplaySourceFileインターフェース実装
     */
    public function display() {
        highlight_file($this->filename);
    }
}
?>