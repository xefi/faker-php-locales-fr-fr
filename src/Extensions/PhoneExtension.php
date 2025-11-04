<?php

namespace Xefi\Faker\FrFr\Extensions;

use Xefi\Faker\Extensions\PhoneExtension as BasePhoneExtension;

class PhoneExtension extends BasePhoneExtension
{
    public function getLocale(): ?string
    {
        return 'fr_FR';
    }

    public string $defaultPrefix = '0';

    public string $indicator = '+33';

    protected array $landlineFormats = [
        '1{separator}{d}{d}{separator}{d}{d}{separator}{d}{d}{separator}{d}{d}',
        '2{separator}{d}{d}{separator}{d}{d}{separator}{d}{d}{separator}{d}{d}',
        '3{separator}{d}{d}{separator}{d}{d}{separator}{d}{d}{separator}{d}{d}',
        '4{separator}{d}{d}{separator}{d}{d}{separator}{d}{d}{separator}{d}{d}',
        '5{separator}{d}{d}{separator}{d}{d}{separator}{d}{d}{separator}{d}{d}',
        '8{separator}{d}{d}{separator}{d}{d}{separator}{d}{d}{separator}{d}{d}',
        '9{separator}{d}{d}{separator}{d}{d}{separator}{d}{d}{separator}{d}{d}',
    ];

    protected array $cellFormats = [
        '6{separator}{d}{d}{separator}{d}{d}{separator}{d}{d}{separator}{d}{d}',
        '7{separator}{d}{d}{separator}{d}{d}{separator}{d}{d}{separator}{d}{d}',
    ];
}
