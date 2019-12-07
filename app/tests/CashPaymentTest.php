<?php

namespace App\Tests;

use App\LiskovSubstitutionPrinciple\FileSystemLessonRepository;
use PHPUnit\Framework\TestCase;

class CashPaymentTest extends TestCase
{
    public function testCashPaymentMakePayment()
    {
        $cashPayment = new FileSystemLessonRepository();
        $this->assertEquals('Cash payment made...', $cashPayment->makePayment());
    }
}
