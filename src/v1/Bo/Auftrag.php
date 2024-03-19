<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Bo;

use Conuti\BO4E\v1\Enum\BOTyp;
use DateTime;
use Conuti\BO4E\v1\Enum\Sparte;
use Conuti\BO4E\v1\Com\Adresse;
use Conuti\BO4E\v1\Com\Preis;
use Conuti\BO4E\v1\Enum\Energierichtung;
use Conuti\BO4E\v1\Enum\DefinitionsTyp;
use Conuti\BO4E\v1\Com\AuftragPosition;

class Auftrag
{
    public function __construct(
        readonly BOTyp $boTyp = BOTyp::AUFTRAG,
        readonly string $versionStruktur = '1',
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
