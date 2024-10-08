<?php

namespace Xefi\Faker\FrFr\Extensions;

use Xefi\Faker\Extensions\Extension;
use Xefi\Faker\FrFr\Luhn;

class CompanyExtension extends Extension
{
    public function siren(): string
    {
        return $this->randomizer->getBytesFromString(implode(range(1, 9)), 1) . $this->randomizer->getBytesFromString(implode(range(0, 9)), 8);
    }

    public function siret(): string
    {
        $siret = $this->siren() . $this->randomizer->getBytesFromString(implode(range(0, 9)), 4);

        return (string) Luhn::create((int)$siret);
    }
}