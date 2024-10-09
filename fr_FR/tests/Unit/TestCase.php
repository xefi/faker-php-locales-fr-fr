<?php

namespace Xefi\Faker\FrFr\Tests\Unit;

use Xefi\Faker\Container\Container;

class TestCase extends \PHPUnit\Framework\TestCase
{
    protected function setUp(): void
    {
        Container::packageManifestPath('/tmp/packages.php');

        (new \Xefi\Faker\FrFr\FakerFrFrServiceProvider())->boot();
    }
}
