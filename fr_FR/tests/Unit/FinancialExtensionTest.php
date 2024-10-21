<?php

namespace Xefi\Faker\FrFr\Tests\Unit;

use Xefi\Faker\Calculators\Iban;

final class FinancialExtensionTest extends TestCase
{
    public function testIban()
    {
        $iban = $this->faker->iban();

        $this->assertEquals(28, strlen($iban));
        $this->assertStringStartsWith('FR', $iban);
        $this->assertTrue(Iban::isValid($iban));
    }
}
