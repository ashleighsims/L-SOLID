<?php

namespace App\Tests;

use App\LiskovSubstitutionPrinciple\CacheLessonRepository;
use PHPUnit\Framework\TestCase;

class StripePaymentTest extends TestCase
{
    public function testStripePaymentMakePayment()
    {
        $stripePayment = new CacheLessonRepository();
        $this->assertEquals('Stripe payment made...', $stripePayment->makePayment());
    }
}
