<?php

namespace Xefi\Faker\FrFr\Tests\Unit;

use ReflectionClass;
use Xefi\Faker\Container\Container;

final class AddressExtensionTest extends TestCase
{
    protected array $departments = [];
    protected array $regions = [];

    protected function setUp(): void
    {
        parent::setUp();

        $addressExtension = new \Xefi\Faker\FrFr\Extensions\AddressExtension(new \Random\Randomizer());
        $this->regions = (new ReflectionClass($addressExtension))->getProperty('regions')->getValue($addressExtension);
        $this->departments = (new ReflectionClass($addressExtension))->getProperty('departments')->getValue($addressExtension);
    }

    public function testRegion(): void
    {
        $faker = new Container(false);

        $results = [];
        for ($i = 0; $i < count($this->regions); $i++) {
            $results[] = $faker->unique()->region();
        }

        $this->assertEqualsCanonicalizing(
            $this->regions,
            $results
        );
    }

    public function testDepartment(): void
    {
        $faker = new Container(false);

        $results = [];
        for ($i = 0; $i < count($this->departments); $i++) {
            $results[] = $faker->unique()->department();
        }

        $this->assertEquals(
            sort($this->departments),
            sort($results)
        );
    }
}
