<?php

namespace Xefi\Faker\FrFr\Tests\Unit;

use Random\Randomizer;
use ReflectionClass;
use Xefi\Faker\FrFr\Extensions\AddressExtension;

final class AddressExtensionTest extends TestCase
{
    protected AddressExtension $extension;
    protected array $departments = [];
    protected array $departmentsNames = [];
    protected array $regions = [];
    protected array $cities = [];
    protected array $streetTypes = [];
    protected array $streetNames = [];

    protected function setUp(): void
    {
        parent::setUp();

        $this->extension = new AddressExtension(new Randomizer());
        $reflection = new ReflectionClass($this->extension);

        $this->regions = $reflection->getProperty('regions')->getValue($this->extension);
        $this->departments = $reflection->getProperty('departments')->getValue($this->extension);
        $this->departmentsNames = array_merge(...array_map('array_values', $this->departments));
        $this->cities = $reflection->getProperty('cities')->getValue($this->extension);
        $this->streetTypes = $reflection->getProperty('streetTypes')->getValue($this->extension);
        $this->streetNames = $reflection->getProperty('streetNames')->getValue($this->extension);
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

    public function testCity(): void
    {
        $results = [];
        for ($i = 0; $i < count($this->cities); $i++) {
            $results[] = $this->faker->unique()->city();
        }

        $this->assertEqualsCanonicalizing(
            $this->cities,
            $results
        );
    }

    public function testPostcode(): void
    {
        $results = [];
        for ($i = 0; $i < 100; $i++) {
            $results[] = $this->faker->unique()->postcode();
        }

        foreach ($results as $result) {
            $this->assertMatchesRegularExpression('/^\d[a-zA-Z\d]\d{3}$/', $result);
            $this->assertEquals(5, strlen($result));
        }
    }

    public function testHouseNumber(): void
    {
        $results = [];
        for ($i = 0; $i < 100; $i++) {
            $results[] = $this->faker->unique()->houseNumber();
        }

        foreach ($results as $result) {
            $this->assertMatchesRegularExpression('/^\d{1,4}[a-zA-Z]?$/', $result);
        }
    }

    public function testStreetName(): void
    {
        $results = [];
        for ($i = 0; $i < 100; $i++) {
            $results[] = $this->faker->unique()->streetName();
        }

        foreach ($results as $result) {
            $this->assertStringContainsString(' ', $result);
            [$type, $name] = explode(' ', $result, 2);
            $this->assertContains($type, $this->streetTypes);
            $this->assertContains($name, $this->streetNames);
        }
    }

    public function testStreetAddress(): void
    {
        $results = [];
        for ($i = 0; $i < 100; $i++) {
            $results[] = $this->faker->unique()->streetAddress();
        }

        foreach ($results as $result) {
            $this->assertMatchesRegularExpression('/^\d{1,4}[a-zA-Z]? [\w\s\-\'âéèêÂÉÈÊ]+$/', $result);
        }
    }

    public function testFullAddress(): void
    {

        $results = [];
        for ($i = 0; $i < 100; $i++) {
            $results[] = $this->faker->unique()->fullAddress();
        }

        foreach ($results as $result) {
            $this->assertMatchesRegularExpression('/^\d{1,4}[a-zA-Z]? [\w\s\-\'âéèêÂÉÈÊ]+, \d[a-zA-Z\d]\d{3} [\w\s\-\'ÉÈçéèî]+ \([\w\s\-\'éèô]+\)$/', $result);

            [$streetAddressPart, $postCodeCityAndDepartmentPart] = explode(', ', $result);
            [$houseNumber, $streetType, $streetName] = explode(' ', $streetAddressPart, 3);
            [$postCode, $cityAndDepartmentPart] = explode(' ', $postCodeCityAndDepartmentPart, 2);
            [$city, $departmentPart] = explode(' (', $cityAndDepartmentPart);
            $department = trim($departmentPart, ')');

            $this->assertMatchesRegularExpression('/^\d{1,4}[a-zA-Z]?$/', $houseNumber);
            $this->assertContains($streetType, $this->streetTypes);
            $this->assertContains($streetName, $this->streetNames);
            $this->assertMatchesRegularExpression('/^\d[a-zA-Z\d]\d{3}$/', $postCode);
            $this->assertEquals(5, strlen($postCode));
            $this->assertContains($department, $this->departmentsNames);
            $this->assertContains($city, $this->cities);
        }
    }
}
