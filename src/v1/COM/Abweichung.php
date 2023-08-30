<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;


class Abweichung
{
    public function __construct(
        public ?string $rechnungsNummer,
        public ?string $abweichungsgrundBemerkung,
        public ?string $zugehoerigeRechnung,
        public ?string $abweichungsgrundCode,
        public ?string $abweichungsgrundCodelist,
        /** @var string[] */
        public array $abschlagsrechnungen = [],
    ) {
    }
}
