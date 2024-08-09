<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Bo;

use Conuti\BO4E\v1\Enum\BOTyp;
use DateTime;
use Conuti\BO4E\v1\Enum\Datenqualitaet;
use Conuti\BO4E\v1\Com\Freitext;

class Verwendungszeitraum
{
    public function __construct(
        readonly BOTyp $boTyp = BOTyp::VERWENDUNGSZEITRAUM,
        readonly string $versionStruktur = '1',
        readonly ?DateTime $verwendungAb = null,
        readonly ?DateTime $verwendungBis = null,
        readonly ?int $zeitraumId = null,
        readonly ?Datenqualitaet $datenqualitaet = null,
        readonly ?Freitext $freitext = null,
        readonly ?string $antwortstatus = null,
        readonly ?string $antwortstatusCodeliste = null,
    ) {
    }
}
