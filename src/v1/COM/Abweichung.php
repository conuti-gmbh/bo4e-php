<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\Abweichungsgrund;

class Abweichung
{
    public function __construct(
        readonly ?Abweichungsgrund $abweichungsgrund,
        readonly ?string $abweichungsgrundBemerkung,
        readonly ?string $zugehoerigeRechnung,
        readonly ?string $zugehoerigeBestellung,
        readonly ?string $abweichungsgrundCode,
        readonly ?string $abweichungsgrundCodeliste,
        readonly ?string $fehlendePositionen1,
        readonly ?string $fehlendePositionen2,
        readonly ?string $fehlendePositionen3,
        readonly ?string $fehlendePositionen4,
        readonly ?string $fehlendePositionen5,
        readonly ?string $abweichungsgrundBemerkung1,
        readonly ?string $abweichungsgrundBemerkung2,
        readonly ?string $abweichungsgrundBemerkung3,
        readonly ?string $abweichungsgrundBemerkung4,
        readonly ?string $abweichungsgrundBemerkung5,
        readonly ?string $referenz,
        /** @var string[] */
        readonly array $abschlagsrechnungen = [],
    ) {
    }
}
