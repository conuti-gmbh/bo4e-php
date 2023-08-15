<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Vertragskonditionen;
use Conuti\BO4E\v1\Enum\Geschaeftspartnerrolle;
use Conuti\BO4E\v1\Enum\Lokationstyp;
use Conuti\BO4E\v1\Enum\Sparte;
use Conuti\BO4E\v1\Enum\Vertragstatus;
use DateTime;

class Vertrag
{
    public function __construct(
        readonly string $boTyp,
        readonly ?string $versionStruktur,
        readonly ?Sparte $sparte,
        readonly ?string $vertragsart,
        readonly ?string $vertragsnummer,
        readonly ?string $beschreibung,
        readonly ?string $lokationsId,
        readonly ?Lokationstyp $lokationsTyp,
        readonly ?Vertragstatus $vertragsstatus,
        readonly ?DateTime $vertragsbeginn,
        readonly ?string $vertragsende,
        readonly ?int $gemeinderabatt,
        readonly ?Vertragskonditionen $vertragskonditionen,
        readonly ?Geschaeftspartner $korrespondenzpartner,
        readonly ?bool $abrechnungUeberNna,
        /** @var Marktteilnehmer[] $vertragspartner1 */
        readonly array $vertragspartner1 = [],
        /** @var Geschaeftspartner[] $vertragspartner2 */
        readonly array $vertragspartner2 = [],
    ) {
    }

    public function getPartner2ByRolle(Geschaeftspartnerrolle $rolle): ?Geschaeftspartner
    {
        foreach ($this->vertragspartner2 as $partner) {
            if ($partner->hasRolle($rolle)) {
                return $partner;
            }
        }

        return null;
    }
}
