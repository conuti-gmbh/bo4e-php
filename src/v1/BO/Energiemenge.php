<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Verbrauch;
use Conuti\BO4E\v1\Enum\BOTyp;
use Conuti\BO4E\v1\Enum\Lokationstyp;

class Energiemenge
{
    public function __construct(
        readonly BOTyp $boTyp,
        readonly string $versionStruktur,
        readonly ?string $lokationsId,
        readonly ?Lokationstyp $lokationsTyp,
        readonly ?string $fertigstellungsdatum,
        readonly ?string $startdatum,
        readonly ?string $enddatum,
        readonly ?string $bilanzierungsdatum,
        readonly ?string $beginndatum,
        readonly ?string $referenzStammdatenmeldungMsb,
        readonly ?string $konfiguration,
        /** @var Verbrauch[] */
        readonly array $energieverbrauch = []
    ) {
    }
}
