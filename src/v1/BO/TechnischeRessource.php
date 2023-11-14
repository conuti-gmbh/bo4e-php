<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Nennleistung;
use Conuti\BO4E\v1\COM\VerbrauchendeTechnischeRessource;
use Conuti\BO4E\v1\Enum\ArtEmobilitaet;
use Conuti\BO4E\v1\Enum\BOTyp;
use Conuti\BO4E\v1\Enum\Erzeugungsart;
use Conuti\BO4E\v1\Enum\Lokationszuordnung;
use Conuti\BO4E\v1\Enum\Sparte;
use Conuti\BO4E\v1\Enum\Speicherart;
use Conuti\BO4E\v1\Enum\Verbrauchsart;
use Conuti\BO4E\v1\Enum\Waermenutzung;

class TechnischeRessource
{
    public function __construct(
        readonly BOTyp $boTyp,
        readonly string $versionStruktur,
        readonly ?string $ressourcenId,
        readonly ?Sparte $sparte,
        readonly ?Lokationszuordnung $lokationszuordnung,
        readonly ?string $referenzMesslokation,
        readonly ?string $referenzMarktlokation,
        readonly ?string $referenzNetzlokation,
        readonly ?string $referenzSteuerbareRessource,
        readonly ?Nennleistung $nennleistung,
        readonly ?float $speicherkapazitaet,
        readonly ?Verbrauchsart $verbrauchsart,
        readonly ?Waermenutzung $waermenutzung,
        readonly ?ArtEmobilitaet $artEMobilitaet,
        readonly ?Erzeugungsart $erzeugungsart,
        readonly ?Speicherart $speicherart,
        readonly ?VerbrauchendeTechnischeRessource $verbrauchendeTechnischeRessource,
        readonly ?bool $weitereEinrichtung
    ) {
    }
}
