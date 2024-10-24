<?php

namespace Xefi\Faker\FrFr\Tests\Unit;

use Xefi\Faker\Container\Container;

class TestCase extends \PHPUnit\Framework\TestCase
{
    protected Container $faker;

    protected function setUp(): void
    {
        Container::packageManifestPath('/tmp/packages.php');

        (new \Xefi\Faker\FrFr\FakerFrFrServiceProvider())->boot();

        $this->faker = (new Container(false))->locale('fr-FR');
    }
}
