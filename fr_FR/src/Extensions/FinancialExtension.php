<?php

namespace Xefi\Faker\FrFr\Extensions;

use Xefi\Faker\Extensions\Extension;

class FinancialExtension extends Extension
{
    public function nir(string $gender = null, bool $formatted = false): string {
        // Gender
        if ($gender === 'M') {
            $nir = 1;
        } elseif ($gender === 'F') {
            $nir = 2;
        } else {
            $nir = $this->randomizer->getInt(1, 2);
        }

        $nir .=
            // Year of birth
            $this->randomizer->getBytesFromString(implode(range(0,9)), 2).
            // Month of birth (mm)
            sprintf('%02d', $this->randomizer->getInt(1, 12));

        // Department
        $department = key((new AddressExtension($this->randomizer))->department());
        $nir .= $department;

        // Town number, depends on department length
        if (strlen($department) === 2) {
            $nir .= sprintf('%03d', $this->randomizer->getBytesFromString(implode(range(0, 9)), 3));
        } elseif (strlen($department) === 3) {
            $nir .= sprintf('%02d', $this->randomizer->getBytesFromString(implode(range(0, 9)), 2));
        }

        // Born number (depending of town and month of birth)
        $nir .= sprintf('%03d', $this->randomizer->getBytesFromString(implode(range(0, 9)), 3));

        /**
         * The key for a given NIR is `97 - 97 % NIR`
         * NIR has to be an integer, so we have to do a little replacment
         * for departments 2A and 2B
         */
        if ($department === '2A') {
            $nirInteger = str_replace('2A', '19', $nir);
        } elseif ($department === '2B') {
            $nirInteger = str_replace('2B', '18', $nir);
        } else {
            $nirInteger = $nir;
        }
        $nir .= sprintf('%02d', 97 - $nirInteger % 97);

        // Format is x xx xx xx xxx xxx xx
        if ($formatted) {
            $nir = substr($nir, 0, 1) . ' ' . substr($nir, 1, 2) . ' ' . substr($nir, 3, 2) . ' ' . substr($nir, 5, 2) . ' ' . substr($nir, 7, 3) . ' ' . substr($nir, 10, 3) . ' ' . substr($nir, 13, 2);
        }

        return $nir;
    }
}