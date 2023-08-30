<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Adresse;
use Conuti\BO4E\v1\COM\AuftragPosition;
use Conuti\BO4E\v1\COM\Preis;
use DateTime;

class Auftrag
{
    public function __construct(
        public string $boTyp,
        public string $versionStruktur,
        public ?DateTime $ausfuehrungsdatum,
        public ?DateTime $fertigstellungsdatum,
        public ?DateTime $startdatum,
        public ?string $sparte,
        public ?Adresse $lieferanschrift,
        public ?string $marktlokationsId,
        public ?Preis $mindestpreis,
        public ?Preis $hoechstpreis,
        public ?string $energierichtung,
        public int|float|null $berechnungspreis,
        public int|float|null $summeGesamt,
        public ?DateTime $verschobenerAbmeldetermin,
        public ?Geschaeftspartner $lieferadresseAltgeraete,
        /** @var AuftragPosition[] */
        public array $positionsdaten = [],
        /** @var string[] */
        public array $bemerkungen = []
    ) {
    }
}
