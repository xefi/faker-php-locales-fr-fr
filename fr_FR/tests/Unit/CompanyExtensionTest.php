<?php

namespace Xefi\Faker\FrFr\Tests\Unit;

use Xefi\Faker\Container\Container;
use Xefi\Faker\FrFr\Luhn;

final class CompanyExtensionTest extends TestCase
{
    public function testSiren()
    {
        $faker = new Container(false);

        $results = [];
        for ($i = 0; $i < 100; $i++) {
            $results[] = $faker->siren();
        }

        foreach ($results as $result) {
            $this->assertIsNumeric($result);
            $this->assertEquals(9, strlen($result));
        }
    }

    public function testSiret()
    {
        $faker = new Container(false);

        $results = [];
        for ($i = 0; $i < 100; $i++) {
            $results[] = $faker->siret();
        }

        foreach ($results as $result) {
            $this->assertIsNumeric($result);
            $this->assertEquals(14, strlen($result));
            $this->assertTrue(Luhn::isValid($result));
        }
    }
}
