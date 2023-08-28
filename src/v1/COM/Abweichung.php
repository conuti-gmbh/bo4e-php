<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\Abweichungsgrund;

class Abweichung
{
    public function __construct(
        readonly ?Abweichungsgrund $rechnungsNummer,
        readonly ?string $abweichungsgrundBemerkung,
        readonly ?string $zugehoerigeRechnung,
        readonly ?string $abweichungsgrundCode,
        readonly ?string $abweichungsgrundCodelist,
        /** @var string[] */
        readonly array $abschlagsrechnungen = [],
    ) {
    }
}
