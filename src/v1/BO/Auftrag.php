<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Adresse;
use Conuti\BO4E\v1\COM\AuftragPosition;
use Conuti\BO4E\v1\COM\Preis;
use Conuti\BO4E\v1\Enum\BOTyp;
use Conuti\BO4E\v1\Enum\DefinitionsTyp;
use Conuti\BO4E\v1\Enum\Energierichtung;
use Conuti\BO4E\v1\Enum\Sparte;
use DateTime;

class Auftrag
{
    public function __construct(
        readonly BOTyp $boTyp,
        readonly string $versionStruktur,
        readonly ?DateTime $ausfuehrungsdatum = null,
        readonly ?DateTime $fertigstellungsdatum = null,
        readonly ?DateTime $startdatum = null,
        readonly ?Sparte $sparte = null,
        readonly ?Adresse $lieferanschrift = null,
        readonly ?string $marktlokationsId = null,
        readonly ?Preis $mindestpreis = null,
        readonly ?Preis $hoechstpreis = null,
        readonly ?Energierichtung $energierichtung = null,
        readonly ?float $berechnungspreis = null,
        readonly ?float $summeGesamt = null,
        readonly ?DateTime $verschobenerAbmeldetermin = null,
        readonly ?DateTime $behebungsZeitpunkt = null,
        readonly ?Geschaeftspartner $lieferadresseAltgeraete = null,
        readonly ?DefinitionsTyp $definitionsTyp = null,
        /** @var AuftragPosition[] */
        readonly array $positionsdaten = [],
        /** @var string[] */
        readonly array $bemerkungen = [],
    ) {
    }
}
