<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\EnFG;
use Conuti\BO4E\v1\COM\Vertragskonditionen;
use Conuti\BO4E\v1\Enum\Lokationstyp;
use Conuti\BO4E\v1\Enum\Sparte;
use Conuti\BO4E\v1\Enum\Vertragstatus;
use DateTime;

class Vertrag
{
    public function __construct(
        readonly string $boTyp,
        readonly string $versionStruktur,
        readonly ?Sparte $sparte = null,
        readonly ?string $vertragsart = null,
        readonly ?string $vertragsnummer = null,
        readonly ?string $beschreibung = null,
        readonly ?string $lokationsId = null,
        readonly ?Lokationstyp $lokationsTyp = null,
        readonly ?Vertragstatus $vertragsstatus = null,
        readonly ?DateTime $vertragsbeginn = null,
        readonly ?string $vertragsende = null,
        readonly ?int $gemeinderabatt = null,
        readonly ?Vertragskonditionen $vertragskonditionen = null,
        readonly ?Geschaeftspartner $korrespondenzpartner = null,
        readonly ?bool $abrechnungUeberNna = null,
        /** @var Marktteilnehmer[] $vertragspartner1 */
        readonly array $vertragspartner1 = [],
        /** @var Geschaeftspartner[] $vertragspartner2 */
        readonly array $vertragspartner2 = [],
        /** @var EnFG[] */
        readonly array $enFG = [],
    ) {
    }
}
