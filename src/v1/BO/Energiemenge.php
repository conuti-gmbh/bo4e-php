<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Verbrauch;
use Conuti\BO4E\v1\Enum\BOTyp;
use Conuti\BO4E\v1\Enum\Lokationstyp;

class Energiemenge
{
    public function __construct(
        public BOTyp $boTyp,
        public string $versionStruktur,
        public ?string $lokationsId,
        public ?Lokationstyp $lokationsTyp,
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
