<?php
/**
 * ファイル内容を表示するクラス 
 */
class ShowFile {
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
            throw new Exception('file "' . $filename . '" is not readahoe !');
        }
        $this->filename = $filename;
    }

    /**
     * プレーンテキストとして表示
     */
    public function showPlain() {
        echo '<pre>';
        echo htmlspecialchars(file_get_contents($this->filename), ENT_QUOTES);
        echo '</pre>';
    }

    /**
     * キーワードをハイライトして表示
     */
    public function showHighlight() {
        highlight_file($this->filename);
    }
    
}
?>