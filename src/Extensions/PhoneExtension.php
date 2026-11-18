<?php

namespace Xefi\Faker\FrFr\Extensions;

use Xefi\Faker\Extensions\PhoneExtension as BasePhoneExtension;

class PhoneExtension extends BasePhoneExtension
{
    public string $defaultPrefix = '0';

    public string $indicator = '+33';

    /**
     * Get the locale handled by this extension.
     *
     * @return string|null
     */
    public function getLocale(): ?string
    {
        return 'fr_FR';
    }

    protected array $landlineFormats = [
        '1{separator}{d}{d}{separator}{d}{d}{separator}{d}{d}{separator}{d}{d}',
        '2{separator}{d}{d}{separator}{d}{d}{separator}{d}{d}{separator}{d}{d}',
        '3{separator}{d}{d}{separator}{d}{d}{separator}{d}{d}{separator}{d}{d}',
        '4{separator}{d}{d}{separator}{d}{d}{separator}{d}{d}{separator}{d}{d}',
        '5{separator}{d}{d}{separator}{d}{d}{separator}{d}{d}{separator}{d}{d}',
        '9{separator}{d}{d}{separator}{d}{d}{separator}{d}{d}{separator}{d}{d}',
    ];

    protected array $cellFormats = [
        '6{separator}{d}{d}{separator}{d}{d}{separator}{d}{d}{separator}{d}{d}',
        '7{separator}3{d}{separator}{d}{d}{separator}{d}{d}{separator}{d}{d}',
        '7{separator}4{d}{separator}{d}{d}{separator}{d}{d}{separator}{d}{d}',
        '7{separator}5{d}{separator}{d}{d}{separator}{d}{d}{separator}{d}{d}',
        '7{separator}6{d}{separator}{d}{d}{separator}{d}{d}{separator}{d}{d}',
        '7{separator}7{d}{separator}{d}{d}{separator}{d}{d}{separator}{d}{d}',
        '7{separator}8{d}{separator}{d}{d}{separator}{d}{d}{separator}{d}{d}',
        '7{separator}9{d}{separator}{d}{d}{separator}{d}{d}{separator}{d}{d}',
    ];

    /**
     * Generate a phone number, keeping a separator between the indicator and the number.
     *
     * @param string|null $format
     * @param string      $separator
     * @param string|null $prefix
     *
     * @return string
     */
    public function phoneNumber(?string $format = null, string $separator = '', ?string $prefix = null): string
    {
        if ($prefix === $this->indicator) {
            $prefix .= $separator;
        }

        return parent::phoneNumber($format, $separator, $prefix);
    }
}
