<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\Abweichungsgrund;

class Abweichung
{
    public function __construct(
        readonly ?Abweichungsgrund $abweichungsgrund = null,
        readonly ?string $abweichungsgrundBemerkung = null,
        readonly ?string $zugehoerigeRechnung = null,
        readonly ?string $zugehoerigeBestellung = null,
        readonly ?string $abweichungsgrundCode = null,
        readonly ?string $abweichungsgrundCodeliste = null,
        readonly ?string $fehlendePositionen1 = null,
        readonly ?string $fehlendePositionen2 = null,
        readonly ?string $fehlendePositionen3 = null,
        readonly ?string $fehlendePositionen4 = null,
        readonly ?string $fehlendePositionen5 = null,
        readonly ?string $abweichungsgrundBemerkung1 = null,
        readonly ?string $abweichungsgrundBemerkung2 = null,
        readonly ?string $abweichungsgrundBemerkung3 = null,
        readonly ?string $abweichungsgrundBemerkung4 = null,
        readonly ?string $abweichungsgrundBemerkung5 = null,
        readonly ?string $referenz = null,
        /** @var string[] */
        readonly array $abschlagsrechnungen = [],
    ) {
    }
}
