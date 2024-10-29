<?php

namespace Xefi\Faker\FrFr\Extensions;

use Xefi\Faker\Extensions\TextExtension as BaseTextExtension;

class TextExtension extends BaseTextExtension
{
    public function getLocale(): string|null
    {
        return 'fr_FR';
    }

    /**
     * Text in format => Paragraphs => Sentences => Words.
     *
     * @var array|array[]
     */
    protected array $paragraphs = [
        [
            ['La', 'qualité', 'des', 'services', 'reste', 'un', 'objectif', 'central', 'dans', 'le', 'secteur', 'professionnel.'],
            ['Chaque', 'projet', 'requiert', 'une', 'attention', 'particulière', 'pour', 'assurer', 'sa', 'réussite.'],
            ['Les', 'équipes', 'travaillent', 'en', 'collaboration', 'afin', 'd\'atteindre', 'les', 'objectifs', 'communs.'],
            ['La', 'communication', 'efficace', 'entre', 'les', 'membres', 'favorise', 'une', 'meilleure', 'productivité.'],
        ],
        [
            ['La', 'gestion', 'des', 'ressources', 'est', 'un', 'élément', 'clé', 'de', 'la', 'performance', 'globale.'],
            ['Les', 'méthodes', 'de', 'travail', 'évoluent', 'avec', 'les', 'besoins', 'et', 'les', 'technologies.'],
            ['L\'adaptabilité', 'permet', 'aux', 'structures', 'de', 'rester', 'compétitives', 'et', 'innovantes.'],
            ['Les', 'processus', 'sont', 'révisés', 'pour', 'optimiser', 'les', 'résultats', 'et', 'répondre', 'aux', 'exigences', 'du', 'marché.'],
        ],
        [
            ['La', 'satisfaction', 'client', 'dépend', 'de', 'la', 'qualité', 'du', 'service', 'fourni', 'et', 'de', 'la', 'réactivité.'],
            ['Des', 'indicateurs', 'sont', 'utilisés', 'pour', 'mesurer', 'la', 'performance', 'et', 'orienter', 'les', 'décisions', 'stratégiques.'],
            ['Les', 'défis', 'quotidiens', 'sont', 'relevés', 'grâce', 'à', 'une', 'gestion', 'efficace', 'et', 'des', 'compétences', 'adaptées.'],
            ['L\'évaluation', 'régulière', 'des', 'pratiques', 'permet', 'd\'identifier', 'des', 'améliorations', 'potentielles.'],
        ],
        [
            ['La', 'formation', 'et', 'le', 'développement', 'des', 'compétences', 'sont', 'prioritaires', 'pour', 'les', 'entreprises.'],
            ['Les', 'collaborateurs', 'sont', 'encouragés', 'à', 'développer', 'de', 'nouvelles', 'compétences', 'et', 'à', 'innover.'],
            ['Les', 'stratégies', 'd\'amélioration', 'continue', 'sont', 'mises', 'en', 'place', 'pour', 'optimiser', 'les', 'performances', 'et', 'réduire', 'les', 'risques.'],
            ['Des', 'programmes', 'de', 'formation', 'personnalisés', 'sont', 'proposés', 'afin', 'de', 'soutenir', 'le', 'développement', 'individuel', 'et', 'collectif.'],
        ],
        [
            ['L\'analyse', 'des', 'données', 'aide', 'à', 'identifier', 'les', 'axes', 'de', 'croissance', 'et', 'd\'amélioration.'],
            ['Les', 'objectifs', 'sont', 'ajustés', 'selon', 'les', 'évolutions', 'du', 'marché', 'et', 'les', 'attentes', 'des', 'clients.'],
            ['Un', 'suivi', 'régulier', 'des', 'progrès', 'favorise', 'une', 'adaptation', 'rapide', 'aux', 'changements.'],
            ['La', 'prise', 'de', 'décisions', 's\'appuie', 'sur', 'des', 'données', 'fiables', 'et', 'des', 'analyses', 'précises.'],
            ['Des', 'revues', 'périodiques', 'permettent', 'de', 'réévaluer', 'les', 'stratégies', 'et', 'de', 'mettre', 'en', 'place', 'des', 'actions', 'correctives.'],
        ],
    ];
}
