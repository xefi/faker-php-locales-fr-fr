<?php

namespace Xefi\Faker\FrFr;

use Xefi\Faker\FrFr\Extensions\AddressExtension;
use Xefi\Faker\FrFr\Extensions\ColorsExtension;
use Xefi\Faker\FrFr\Extensions\CompanyExtension;
use Xefi\Faker\FrFr\Extensions\FinancialExtension;
use Xefi\Faker\FrFr\Extensions\PersonExtension;
use Xefi\Faker\FrFr\Extensions\PhoneExtension;
use Xefi\Faker\FrFr\Extensions\TextExtension;
use Xefi\Faker\Providers\Provider;

class FakerFrFrServiceProvider extends Provider
{
    public function boot(): void
    {
        $this->extensions([
            AddressExtension::class,
            CompanyExtension::class,
            FinancialExtension::class,
            PersonExtension::class,
            ColorsExtension::class,
            TextExtension::class,
            PhoneExtension::class,
        ]);
    }
}
