<?php
require_once 'Reader.php';
?>
<?php
/**
 * xmlファイルの読み込みを行うクラス
 */
class XMLFileReader implements Reader {
    /**
     * 内容を表示するファイル名
     * @access private
     */
    private $filename;

    private $handler;

    /**
     * コンストラクタ
     */
    public function __construct($filename) {
        if (!is_readable($filename)) {
            throw new Exception('file [' . $filename . ' ] is not readable !');
        }
        $this->filename = $filename;
    }

    /**
     * 読み込みを行う
     */
}
?>