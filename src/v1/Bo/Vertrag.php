<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Bo;

use Conuti\BO4E\v1\Enum\BOTyp;
use Conuti\BO4E\v1\Enum\Sparte;
use Conuti\BO4E\v1\Enum\Lokationstyp;
use Conuti\BO4E\v1\Enum\Vertragstatus;
use DateTime;
use Conuti\BO4E\v1\Com\Vertragskonditionen;
use Conuti\BO4E\v1\Enum\Datenqualitaet;
use Conuti\BO4E\v1\Com\EnFG;

class Vertrag
{
    public function __construct(
        readonly BOTyp $boTyp = BOTyp::VERTRAG,
        readonly string $versionStruktur = '1',
        readonly ?Sparte $sparte = null,
        readonly ?string $vertragsart = null,
        readonly ?string $vertragsnummer = null,
        readonly ?string $beschreibung = null,
        readonly ?string $lokationsId = null,
        readonly ?Lokationstyp $lokationsTyp = null,
        readonly ?Vertragstatus $vertragsstatus = null,
        readonly ?DateTime $vertragsbeginn = null,
        readonly ?DateTime $vertragsende = null,
        readonly ?int $gemeinderabatt = null,
        readonly ?Vertragskonditionen $vertragskonditionen = null,
        readonly ?Geschaeftspartner $korrespondenzpartner = null,
        readonly ?bool $abrechnungUeberNna = null,
        readonly ?Datenqualitaet $datenqualitaet = null,
        readonly ?int $zeitraumId = null,
        /** @var Geschaeftspartner[] */
        readonly array $vertragspartner1 = [],
        /** @var Geschaeftspartner[] */
        readonly array $vertragspartner2 = [],
        /** @var EnFG[] */
        readonly array $enFG = [],
    ) {
    }
}
