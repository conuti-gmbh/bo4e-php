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
        readonly ?string $lokationsId = null,
        readonly ?Lokationstyp $lokationsTyp = null,
        readonly ?string $fertigstellungsdatum = null,
        readonly ?string $startdatum = null,
        readonly ?string $enddatum = null,
        readonly ?string $bilanzierungsdatum = null,
        readonly ?string $beginndatum = null,
        readonly ?string $referenzStammdatenmeldungMsb = null,
        readonly ?string $konfiguration = null,
        /** @var Verbrauch[] */
        readonly array $energieverbrauch = [],
    ) {
    }
}
