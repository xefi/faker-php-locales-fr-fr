<?php

namespace Xefi\Faker\FrFr\Tests\Unit;

final class PhoneExtensionTest extends TestCase
{
    public function testPhoneNumber(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $this->assertMatchesRegularExpression('/^0([1-69]\d|7[3-9])\d{7}$/', $this->faker->phoneNumber());
        }
    }

    public function testLandlinePhoneNumber(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $this->assertMatchesRegularExpression('/^0[1-59]( \d{2}){4}$/', $this->faker->spacedLandlinePhoneNumber());
        }
    }

    public function testCellPhoneNumber(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $this->assertMatchesRegularExpression('/^0(6 \d{2}|7 [3-9]\d)( \d{2}){3}$/', $this->faker->spacedCellPhoneNumber());
        }
    }

    public function testIndicatoredPhoneNumber(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $this->assertMatchesRegularExpression('/^\+33([1-69]\d|7[3-9])\d{7}$/', $this->faker->indicatoredPhoneNumber());
            $this->assertMatchesRegularExpression('/^\+33 [1-79]( \d{2}){4}$/', $this->faker->spacedIndicatoredPhoneNumber());
        }
    }

    public function testIndicatorIsSeparatedFromTheNumber(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $this->assertStringStartsWith('+33 ', $this->faker->spacedIndicatoredPhoneNumber());
            $this->assertStringStartsWith('+33-', $this->faker->dashedIndicatoredPhoneNumber());
            $this->assertStringStartsWith('+33.', $this->faker->dottedIndicatoredPhoneNumber());
        }
    }
}
