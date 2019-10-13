<?php  
require_once 'ListDisplay.php';
require_once 'TableDisplay.php';
?>
<?php
    $data = array('Design Pattern',
                  'Template Method Sample1',
                  'Template Method Sample2');
    $display1 = new ListDisplay($data);
    $display2 = new TableDisplay($data);

    $display1->display();
    echo '<hr>';
    $display2->display();
?>