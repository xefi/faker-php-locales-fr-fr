<?php

namespace Xefi\Faker\FrFr\Tests\Unit;

final class PhoneExtensionTest extends TestCase
{
    protected array $formats = [];

    public function testPhoneNumber(): void
    {
        for ($i = 0; $i < 50; $i++) {
            $phoneNumber = $this->faker->phoneNumber();

            $this->assertMatchesRegularExpression('/^\d{10}$/', $phoneNumber);
        }
    }

    public function testIndicatoredPhoneNumber(): void
    {
        for ($i = 0; $i < 50; $i++) {
            $phoneNumber = $this->faker->indicatoredPhoneNumber();

            $this->assertMatchesRegularExpression('/^\+33\d{9}$/', $phoneNumber);
        }
    }

    public function testCellPhoneNumber(): void
    {
        for ($i = 0; $i < 50; $i++) {
            $phoneNumber = $this->faker->cellPhoneNumber();

            $this->assertMatchesRegularExpression('/^0[67]\d{8}$/', $phoneNumber);
        }
    }

    public function testIndicatoredCellPhoneNumber(): void
    {
        for ($i = 0; $i < 50; $i++) {
            $phoneNumber = $this->faker->indicatoredCellPhoneNumber();

            $this->assertMatchesRegularExpression('/^\+33[67]\d{8}$/', $phoneNumber);
        }
    }

    public function testLandlinePhoneNumber(): void
    {
        for ($i = 0; $i < 50; $i++) {
            $phoneNumber = $this->faker->landlinePhoneNumber();

            $this->assertMatchesRegularExpression('/^0[1234589]\d{8}$/', $phoneNumber);
        }
    }

    public function testIndicatoredLandlinePhoneNumber(): void
    {
        for ($i = 0; $i < 50; $i++) {
            $phoneNumber = $this->faker->indicatoredLandlinePhoneNumber();

            $this->assertMatchesRegularExpression('/^\+33[1234589]\d{8}$/', $phoneNumber);
        }
    }
}
