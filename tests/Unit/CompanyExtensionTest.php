<?php

namespace Xefi\Faker\FrFr\Tests\Unit;

use Random\Randomizer;
use Xefi\Faker\Calculators\Luhn;
use Xefi\Faker\Container\Container;
use Xefi\Faker\FrFr\Extensions\CompanyExtension;

final class CompanyExtensionTest extends TestCase
{
    protected array $companies = [];

    protected function setUp(): void
    {
        parent::setUp();

        $companyExtension = new CompanyExtension(new Randomizer());
        $this->companies = (new \ReflectionClass($companyExtension))->getProperty('companies')->getValue($companyExtension);
    }

    public function testSiren()
    {
        $results = [];
        for ($i = 0; $i < 100; $i++) {
            $results[] = $this->faker->siren();
        }

        foreach ($results as $result) {
            $this->assertIsNumeric($result);
            $this->assertEquals(9, strlen($result));
        }
    }

    public function testSiret()
    {
        $results = [];
        for ($i = 0; $i < 100; $i++) {
            $results[] = $this->faker->siret();
        }

        foreach ($results as $result) {
            $this->assertIsNumeric($result);
            $this->assertEquals(14, strlen($result));
            $this->assertTrue(Luhn::isValid($result));
        }
    }

    public function testCompany()
    {
        $results = [];
        for ($i = 0; $i < count($this->companies); $i++) {
            $results[] = $this->faker->unique()->company();
        }

        $this->assertEqualsCanonicalizing(
            $this->companies,
            $results
        );
    }
}
