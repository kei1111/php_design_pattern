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
}


?>