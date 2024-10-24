<?php

namespace Xefi\Faker\FrFr\Tests\Unit;

use ReflectionClass;

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
        $results = [];
        for ($i = 0; $i < count($this->regions); $i++) {
            $results[] = $this->faker->unique()->region();
        }

        $this->assertEqualsCanonicalizing(
            $this->regions,
            $results
        );
    }

    public function testDepartment(): void
    {
        $results = [];
        for ($i = 0; $i < count($this->departments); $i++) {
            $results[] = $this->faker->unique()->department();
        }

        $this->assertEquals(
            sort($this->departments),
            sort($results)
        );
    }
}
