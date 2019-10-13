<?php
require_once 'AbstractDisplay.php';
?>

<?php
/**
 * ConcreteClass
 */
class ListDisplay extends AbstractDisplay {
    /**
     * ヘッダ表示
     */
    protected function displayHeader() {
        echo '<dl>';
    }

    /**
     * ボディを表示
     */
    protected function displayBody() {
        foreach ($this->getData() as $key => $value) {
            echo '<dt>Item ' . $key . '</dt>';
            echo '<dd>' . $value . '</dd>';
        }
    }

    /**
     * フッタを表示
     */
    protected function displayFooter() {
        echo '</dl>';
    }
}

?>