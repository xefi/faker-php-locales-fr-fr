<?php

namespace Xefi\Faker\FrFr\Extensions;

use Xefi\Faker\Extensions\FinancialExtension as BaseFinancialExtension;
use Xefi\Faker\Extensions\Traits\HasLocale;

class FinancialExtension extends BaseFinancialExtension
{
    use HasLocale;

    public function getLocale(): string|null
    {
        return 'fr-FR';
    }

    public function iban(string $countryCode = null, string $format = null): string
    {
        if ($countryCode === null) {
            $countryCode = 'FR';
        }

        return parent::iban($countryCode, $format);
    }
}
