<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Verbrauch;

class Energiemenge
{
    public function __construct(
        public string $boTyp,
        public string $versionStruktur,
        public ?string $lokationsId,
        public ?string $lokationsTyp,
        public ?string $fertigstellungsdatum,
        public ?string $startdatum,
        public ?string $enddatum,
        public ?string $bilanzierungsdatum,
        public ?string $beginndatum,
        public ?string $referenzStammdatenmeldungMsb,
        public ?string $konfiguration,
        /** @var Verbrauch[] */
        public array $energieverbrauch = []
    ) {
    }
}
