<?php

namespace Xefi\Faker\FrFr\Extensions;

use Xefi\Faker\Calculators\Luhn;
use Xefi\Faker\Extensions\Extension;

class CompanyExtension extends Extension
{
    private array $companies = [
        'Dupont & Fils SARL', 'Les Horizons Innovants', 'Châteauvert Technologies',
        'Alliance Lumière', 'Rivière & Associés', 'ÉtoileBleue Industries',
        'Prestige Montmartre', 'Lacroix Ingénierie', "Forge d'Argent SAS",
        'NouvelleVague Solutions', 'Bourgogne Logistique', 'Clairmont Médical',
        'Verger & Compagnie', 'HauteMontagne Énergie', 'Touraine Systems',
        'Delacroix Automation', 'Alpille Informatique', 'Phénix Industrie',
        'Soleil Levant Ventures', "Ciel d'Azur Pharma", 'Pavillon Blanc SA',
        'Mistral Digital', 'Marseille Nautique', 'Boisclair Constructions',
        'Rouge et Or Design', 'VignobleTech SAS', 'Lorraine Groupe',
        'Atlantique Solutions', 'LaForge Métallurgie', 'Aurélien & Co.',
    ];

    public function siren(): string
    {
        return $this->randomizer->getBytesFromString(implode(range(1, 9)), 1).$this->randomizer->getBytesFromString(implode(range(0, 9)), 8);
    }

    public function siret(): string
    {
        $siret = $this->siren().$this->randomizer->getBytesFromString(implode(range(0, 9)), 4);

        return (string) Luhn::create((int) $siret);
    }

    public function company(): string
    {
        return $this->pickArrayRandomElement($this->companies);
    }
}
