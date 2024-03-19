<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Bo;

use Conuti\BO4E\v1\Enum\BOTyp;
use Conuti\BO4E\v1\Enum\Lokationstyp;
use DateTime;
use Conuti\BO4E\v1\Com\Verbrauch;

class Energiemenge
{
    public function __construct(
        readonly BOTyp $boTyp = BOTyp::ENERGIEMENGE,
        readonly string $versionStruktur = '1',
        readonly ?string $lokationsId = null,
        readonly ?Lokationstyp $lokationsTyp = null,
        readonly ?DateTime $fertigstellungsdatum = null,
        readonly ?DateTime $startdatum = null,
        readonly ?DateTime $enddatum = null,
        readonly ?DateTime $bilanzierungsdatum = null,
        readonly ?DateTime $beginndatum = null,
        readonly ?string $referenzStammdatenmeldungMsb = null,
        readonly ?string $konfiguration = null,
        /** @var Verbrauch[] */
        readonly array $energieverbrauch = [],
    ) {
    }
}
