<?php
require_once 'Reader.php';
require_once 'CSVFileReader.php';
require_once 'XMLFileReader.php';
?>
<?php
/**
 * Readerクラスのインスタンス生成を行う
 */
class ReaderFactory {
    public function create($filename) {
        $reader = $this->createReader($filename);
        return $reader;
    }

    /**
     * Readerクラスのサブクラスを条件判定し、生成する
     */
    private function createReader($filename) {
        $poscsv = stripos($filename, '.csv');
        $posxml = stripos($filename, '.xml');

        if ($poscsv !== false) {
            $r = new CSVFileReader($filename);
            return $r;
        } else if ($posxml !== false) {
            return new XMLFileReader($filename);
        } else {
            die('this filename is not supported : ' . $filename);
        }
    }
}

?>