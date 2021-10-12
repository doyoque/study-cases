<?php

namespace Doyoque\Excel;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ValidateExcel {

    /**
     * @return bool
     */
    public function shouldBeWork($bool = true)
    {
        return $bool;
    }

    /**
     * @return mixed
     */
    public function createSpreadsheet()
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue("A1", "Hello world!");

        $writer = new Xlsx($spreadsheet);
        $writer->save("hello_world.xlsx");
    }
}