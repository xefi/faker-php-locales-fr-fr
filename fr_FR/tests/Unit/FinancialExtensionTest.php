<?php

namespace Xefi\Faker\FrFr\Tests\Unit;

use Xefi\Faker\Container\Container;

final class FinancialExtensionTest extends TestCase
{
    public function testNIRReturnsTheRightGender(): void
    {
        $faker = new Container(false);

        $nir = $faker->nir('M');
        $this->assertStringStartsWith('1', $nir);
    }

    public function testNIRReturnsTheRightPattern(): void
    {
        $faker = new Container(false);

        $results = [];
        for ($i = 0; $i < 100; $i++) {
            $results[] = $faker->nir();
        }

        foreach ($results as $result) {
            $this->assertMatchesRegularExpression("/^[12]\d{5}[0-9A-B]\d{8}$/", $result);
        }
    }

    public function testNIRFormattedReturnsTheRightPattern(): void
    {
        $faker = new Container(false);

        $nir = $faker->nir(formatted: true);
        self::assertMatchesRegularExpression("/^[12]\s\d{2}\s\d{2}\s\d{1}[0-9A-B]\s\d{3}\s\d{3}\s\d{2}$/", $nir);
    }
}
