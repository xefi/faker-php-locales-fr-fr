<?php

namespace Xefi\Faker\FrFr\Extensions;

use Xefi\Faker\Extensions\PhoneExtension as BasePhoneExtension;

class PhoneExtension extends BasePhoneExtension
{
    public function getLocale(): ?string
    {
        return 'fr_FR';
    }

    protected array $formats = [
        '+33{d}{d}{d}{d}{d}{d}{d}{d}{d}',
        '0{d}{d}{d}{d}{d}{d}{d}{d}{d}',
    ];
}