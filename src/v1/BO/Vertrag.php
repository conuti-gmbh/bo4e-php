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
        public string $boTyp,
        public ?string $versionStruktur,
        public ?Sparte $sparte,
        public ?string $vertragsart,
        public ?string $vertragsnummer,
        public ?string $beschreibung,
        public ?string $lokationsId,
        public ?Lokationstyp $lokationsTyp,
        public ?Vertragstatus $vertragsstatus,
        public ?DateTime $vertragsbeginn,
        public ?string $vertragsende,
        public ?int $gemeinderabatt,
        public ?Vertragskonditionen $vertragskonditionen,
        public ?Geschaeftspartner $korrespondenzpartner,
        public ?bool $abrechnungUeberNna,
        /** @var Marktteilnehmer[] $vertragspartner1 */
        public array $vertragspartner1 = [],
        /** @var Geschaeftspartner[] $vertragspartner2 */
        public array $vertragspartner2 = [],
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
