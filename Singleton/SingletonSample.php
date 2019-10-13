<?php
class SingletonSample {

    /**
     * メンバー変数
     */
    private $id;

    /**
     * インスタンスを保持する変数
     */
    private static $instance;

    /**
     * コンストラクタ
     * idとして、生成日時のハッシュ値を作成
     */
    private function __contsruct() {
        $this->id = md5(data('r') . mt_rand());
    }

    /**
     * 唯一のインスタンスを返すためのメソッド
     * @return SingletonSampleインスタンス
     */
    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new SingletonSample();
            echo 'a SingletonSample instance was created !';
        }
        
        return self::$instance;
    }

    /**
     * IDを返す
     * @return インスタンスID
     */
    public function getID() {
        return $this->id;
    }

    /**
     * このインスタンスの複製を許可しないようにする
     * @throws RunimeException
     */
    public final function __clone()
    {
        throw new RuntimeException('Clone is not allowed against' . get_class($this));
    }
}
?>