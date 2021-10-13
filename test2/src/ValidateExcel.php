<?php

namespace Doyoque\Excel;

require_once('vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\IOFactory;

class ValidateExcel {

    /**
     * @var string $format
     */
    protected $format = "Xlsx";

    /**
     * @var string $file
     */
    protected $file;

    /**
     * @param string $format
     * @param string $file
     */
    function __construct($format, $file) {
        $this->format = $format;
        $this->file = $file;
    }

    /**
     * Create reader of file
     * 
     * @param string $file
     * @param string $format
     * @return mixed
     */
    public function readerExcel()
    {
        return IOFactory::createReader($this->format)->load(realpath(__DIR__ . "/" . $this->file))->getActiveSheet();
    }
}

$workSheet = new ValidateExcel("Xlsx", "Type_A.xlsx");

$rows = $workSheet->readerExcel()->toArray();

// print_r($missingValue);

foreach ($rows as $index => $value) {
    print_r($value); echo $index .  "------\n";
}

