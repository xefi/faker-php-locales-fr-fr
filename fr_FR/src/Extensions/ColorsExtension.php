<?php

namespace Xefi\Faker\FrFr\Extensions;

use Xefi\Faker\Extensions\ColorsExtension as BaseColorsExtension;

class ColorsExtension extends BaseColorsExtension
{
    public function getLocale(): string|null
    {
        return 'fr-FR';
    }

    protected array $safeColorNames = [
        'Noir', 'Marron', 'Vert', 'Marine', 'Olive',
        'Pourpre', 'Sarcelle', 'Citron vert', 'Bleu', 'Argent',
        'Gris', 'Jaune', 'Fuchsia', 'Aqua', 'Blanc',
    ];

    protected array $colorNames = [
        'BleuAlice', 'BlancAntique', 'Aqua', 'Aigue-marine', 'Azur',
        'Beige', 'Bisque', 'Noir', 'AmandeBlanchie', 'Bleu',
        'BleuViolet', 'Brun', 'BoisRaboteux', 'BleuCadet', 'Chartreuse',
        'Chocolat', 'Corail', 'Bleuet', 'SoieDeMaïs', 'Cramoisi',
        'Cyan', 'BleuFoncé', 'CyanFoncé', 'OrFoncé', 'GrisFoncé',
        'VertFoncé', 'KakiFoncé', 'MagentaFoncé', 'OliveFoncé', 'OrangeFoncé',
        'OrchidéeFoncé', 'RougeFoncé', 'SaumonFoncé', 'VertMerFoncé', 'BleuArdoiseFoncé',
        'GrisArdoiseFoncé', 'TurquoiseFoncé', 'VioletFoncé', 'RoseProfonde', 'BleuCielProfond',
        'GrisSombre', 'GrisTerne', 'BleuDodger', 'RougeBrique', 'BlancFloral',
        'VertForêt', 'Fuchsia', 'Gainsboro', 'BlancFantôme', 'Or',
        'Gris', 'Vert', 'JauneVert', 'Miellat', 'RoseChaud',
        'RougeIndien', 'Indigo', 'Ivoire', 'Kaki', 'Lavande',
        'BlushLavande', 'VertGazon', 'CitronMousse', 'BleuClair', 'CorailClair',
        'CyanClair', 'JauneOrPâle', 'GrisClair', 'VertClair', 'RoseClair',
        'SaumonClair', 'VertMerClair', 'BleuCielClair', 'GrisArdoiseClair', 'BleuAcierClair',
        'JauneClair', 'CitronVert', 'VertCitron', 'ToileDeLin', 'Magenta',
        'Marron', 'Aigue-marineMoyenne', 'BleuMoyen', 'OrchidéeMoyenne', 'PourpreMoyen',
        'VertMerMoyen', 'BleuArdoiseMoyen', 'VertPrintempsMoyen', 'TurquoiseMoyenne', 'VioletRougeMoyen',
        'BleuMinuit', 'CrèmeMenthe', 'RoseBrumeux', 'Mocassin', 'BlancNavajo',
        'Marine', 'DentelleAncienne', 'Olive', 'KakiOlive', 'Orange',
        'RougeOrange', 'Orchidée', 'VertPâle', 'TurquoisePâle', 'VioletRougePâle',
        'BlancPapaye', 'PêcheClair', 'Pérou', 'Rose', 'Prune',
        'BleuPoudre', 'Pourpre', 'Rouge', 'BrunRosé', 'BleuRoyal',
        'BrunSelle', 'Saumon', 'BrunSableux', 'VertMer', 'CoquilleMer',
        'TerreDeSienne', 'Argent', 'BleuCiel', 'BleuArdoise', 'GrisArdoise',
        'Neige', 'VertPrintemps', 'BleuAcier', 'BrunClair', 'Sarcelle',
        'Chardon', 'Tomate', 'Turquoise', 'Violet', 'Blé',
        'Blanc', 'BlancFumé', 'Jaune',
    ];
}
