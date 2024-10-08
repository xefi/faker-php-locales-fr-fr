<?php

namespace Xefi\Faker\FrFr\Tests\Unit;

use Xefi\Faker\Container\Container;
use Xefi\Faker\NumbersStrings\Extensions\NumbersExtension;
use Xefi\Faker\NumbersStrings\Extensions\StringsExtension;
use Xefi\Faker\NumbersStrings\NumbersStringsServiceProvider;
use Xefi\Faker\Strategies\UniqueStrategy;

class TestCase extends \PHPUnit\Framework\TestCase
{
    protected function setUp(): void
    {
        Container::packageManifestPath('/tmp/packages.php');

        (new \Xefi\Faker\FrFr\FakerFrFrServiceProvider)->boot();
    }
}