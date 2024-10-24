<?php

namespace Xefi\Faker\FrFr\Extensions;

use Xefi\Faker\Extensions\FinancialExtension as BaseFinancialExtension;

class FinancialExtension extends BaseFinancialExtension
{
    public function getLocale(): string|null
    {
        return 'fr-FR';
    }

    public function iban(string $countryCode = null, string $format = null): string
    {
        if ($countryCode === null) {
            $countryCode = 'FR';
        }

        if ($format === null) {
            $format = sprintf(
                '%s%s%s',
                str_repeat('{d}', 10),
                str_repeat('{a}', 11),
                str_repeat('{d}', 2),
            );
        }

        return parent::iban($countryCode, $format);
    }
}
