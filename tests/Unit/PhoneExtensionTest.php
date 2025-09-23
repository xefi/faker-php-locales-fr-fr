<?php

namespace Unit;

use Random\Randomizer;
use Xefi\Faker\FrFr\Extensions\PhoneExtension;
use Xefi\Faker\FrFr\Tests\Unit\TestCase;

final class PhoneExtensionTest extends TestCase
{
    protected array $formats = [];

    protected function setUp(): void
    {
        parent::setUp();

        $phoneExtension = new PhoneExtension(new Randomizer());
        $this->formats = (new \ReflectionClass($phoneExtension))->getProperty('formats')->getValue($phoneExtension);
    }

    public function testPhoneNumberReturnsString(): void
    {
        $number = $this->faker->phoneNumber();

        $this->assertIsString($number);
        $this->assertNotEmpty($number);
    }

    public function testPhoneNumberFormat(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $number = $this->faker->phoneNumber();

            $this->assertMatchesRegularExpression(
                '/^(\+33|0)\d{9}$/',
                $number
            );
        }
    }
}
