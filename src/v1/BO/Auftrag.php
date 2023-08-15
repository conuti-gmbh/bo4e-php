<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Adresse;
use Conuti\BO4E\v1\COM\AuftragPosition;
use Conuti\BO4E\v1\COM\Preis;
use Conuti\BO4E\v1\Enum\BOTyp;
use Conuti\BO4E\v1\Enum\Energierichtung;
use Conuti\BO4E\v1\Enum\Sparte;
use DateTime;

class Auftrag
{
    public function __construct(
        readonly BOTyp $boTyp,
        readonly string $versionStruktur,
        readonly ?DateTime $ausfuehrungsdatum,
        readonly ?DateTime $fertigstellungsdatum,
        readonly ?DateTime $startdatum,
        readonly ?Sparte $sparte,
        readonly ?Adresse $lieferanschrift,
        readonly ?string $marktlokationsId,
        readonly ?Preis $mindestpreis,
        readonly ?Preis $hoechstpreis,
        readonly ?Energierichtung $energierichtung,
        readonly int|float|null $berechnungspreis,
        readonly int|float|null $summeGesamt,
        readonly ?DateTime $verschobenerAbmeldetermin,
        readonly ?Geschaeftspartner $lieferadresseAltgeraete,
        /** @var AuftragPosition[] */
        readonly array $positionsdaten = [],
        /** @var string[] */
        readonly array $bemerkungen = []
    ) {
    }
}
