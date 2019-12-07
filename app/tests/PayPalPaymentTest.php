<?php

namespace App\Tests;

use App\LiskovSubstitutionPrinciple\DatabaseLessonRepository;
use PHPUnit\Framework\TestCase;

class PayPalPaymentTest extends TestCase
{
    public function testPayPalPaymentMakePayment()
    {
        $paypalPayment = new DatabaseLessonRepository();
        $this->assertEquals('PayPal payment made...', $paypalPayment->makePayment());
    }
}
