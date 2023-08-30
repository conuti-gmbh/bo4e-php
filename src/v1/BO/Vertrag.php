<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Vertragskonditionen;
use DateTime;

class Vertrag
{
    public function __construct(
        public string $boTyp,
        public ?string $versionStruktur,
        public ?string $sparte,
        public ?string $vertragsart,
        public ?string $vertragsnummer,
        public ?string $beschreibung,
        public ?string $lokationsId,
        public ?string $lokationsTyp,
        public ?string $vertragsstatus,
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

    public function getPartner2ByRolle(string $rolle): ?Geschaeftspartner
    {
        foreach ($this->vertragspartner2 as $partner) {
            if ($partner->hasRolle($rolle)) {
                return $partner;
            }
        }

        return null;
    }
}
