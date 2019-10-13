<?php 
/**
 * AbstractClassクラス
 */
abstract class AbstractDisplay {
    /**
     * 表示するデータ
     */
    private $data;

    public function __construct($data) {
        if (!is_array($data)) {
            $data = array($data);
        }
        $this->data = $data;
    }

    /**
     * template method
     */
    public function display() {
        $this->displayHeader();
        $this->displayBody();
        $this->displayFooter();
    }

    /**
     * データ取得
     */
    public function getData() {
        return $this->data;
    }

    /**
     * ヘッダ
     * サブクラス実装用抽象メソッド
     */
    protected abstract function displayHeader();

    /**
     * ボディを表示
     * サブクラス実装用抽象メソッド
     */
    protected abstract function displayBody();

    /**
     * フッタを表示
     * サブクラス実装用抽象メソッド
     */
    protected abstract function displayFooter();
}


?>