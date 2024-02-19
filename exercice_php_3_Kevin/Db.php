<?php

class Db
{
    private $pathToCsv;

    function __construct($pathToCsv)
    {
        $this->pathToCsv = $pathToCsv;
    }

    public function getPathToCsv()
    {
        return $this->pathToCsv;
    }

    public function setPathToCsv($pathToCsv)
    {
        $this->pathToCsv = $pathToCsv;
    }

    public function checkIfCsvIsWritable()
    { print_r (is_writable($this->pathToCsv));
        return is_writable($this->pathToCsv);
    }

    public function readCsv()
    {
        return fopen($this->pathToCsv, 'r');
    }

    public function openCsv()
    {
        return fopen($this->pathToCsv, 'ab');
    }

    public function writeIntoCsv($file, $arrayToWrite)
    {
        fputcsv($file, $arrayToWrite);
    }

    public function closeCsv($file)
    {
        fclose($file);
    }

    public function readFromCsv()
    {
        $data = [];
        $csv = $this->readCsv();

        if ($csv !== false) {
            while (($row = fgetcsv($csv)) !== false) {
                $data[] = $row;
            }

            $this->closeCsv($csv);
        }

        return $data;
    }
}

// class Db{
//     private $pathToCsv;

//     public function __construct($pathToCsv) {
//         $this->pathToCsv = $pathToCsv;
//     }
//     getPathToCsv(){
//         return $this->$pathToCsv;
//     }
    
//     setPathToCsv($pathToCsv){
//         $this->$pathToCsv = $pathToCsv;
//     }

//     public function checkIfCsvIsWritable(){
//         is_writable
//     }

//     public function readCsv(){
//         $this->readCsv = $readCsv;
//     }
//     public function openCsv(){
//         $this->openCsv = $openCsv;
//     }
// }