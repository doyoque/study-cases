<?php

use Doyoque\Excel\ValidateExcel;
use PHPUnit\Framework\TestCase;

class ValidateExcelTest extends TestCase
{
    /** @test */
    public function should_be_work_return_true()
    {
        $this->assertTrue((new ValidateExcel)->shouldBeWork());
    }
}