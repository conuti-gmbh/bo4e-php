<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\Abweichungsgrund;

class Abweichung
{
    public function __construct(
        public ?Abweichungsgrund $rechnungsNummer,
        public ?string $abweichungsgrundBemerkung,
        public ?string $zugehoerigeRechnung,
        public ?string $abweichungsgrundCode,
        public ?string $abweichungsgrundCodelist,
        /** @var string[] */
        public array $abschlagsrechnungen = [],
    ) {
    }
}
