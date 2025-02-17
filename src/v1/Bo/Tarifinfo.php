<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Bo;

use Conuti\BO4E\v1\Enum\BOTyp;
use DateTime;
use Conuti\BO4E\v1\Com\Energiemix;
use Conuti\BO4E\v1\Enum\Kundentyp;
use Conuti\BO4E\v1\Enum\Registeranzahl;
use Conuti\BO4E\v1\Enum\Sparte;
use Conuti\BO4E\v1\Enum\Tarifmerkmal;
use Conuti\BO4E\v1\Enum\Tariftyp;
use Conuti\BO4E\v1\Com\Vertragskonditionen;
use Conuti\BO4E\v1\Com\Zeitraum;

class Tarifinfo
{
    public function __construct(
        readonly BOTyp $boTyp = BOTyp::TARIFINFO,
        readonly string $versionStruktur = '1',
        readonly ?Marktteilnehmer $anbieter = null,
        readonly ?string $anbietername = null,
        readonly ?DateTime $anwendung_von = null,
        readonly ?string $bemerkung = null,
        readonly ?string $bezeichnung = null,
        readonly ?Energiemix $energiemix = null,
        /** @var ?Kundentyp[] */
        readonly ?array $kundentypen = null,
        readonly ?Registeranzahl $registeranzahl = null,
        readonly ?Sparte $sparte = null,
        /** @var ?Tarifmerkmal[] */
        readonly ?array $tarifmerkmale = null,
        readonly ?Tariftyp $tariftyp = null,
        readonly ?Vertragskonditionen $vertragskonditionen = null,
        readonly ?string $website = null,
        readonly ?Zeitraum $zeitliche_gueltigkeit = null,
    ) {
    }
}
