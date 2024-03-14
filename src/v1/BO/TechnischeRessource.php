<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Nennleistung;
use Conuti\BO4E\v1\Enum\ArtEmobilitaet;
use Conuti\BO4E\v1\Enum\BOTyp;
use Conuti\BO4E\v1\Enum\Erzeugungsart;
use Conuti\BO4E\v1\Enum\Inbetriebsetzung;
use Conuti\BO4E\v1\Enum\Lokationszuordnung;
use Conuti\BO4E\v1\Enum\RessourceWechselmoeglichkeit;
use Conuti\BO4E\v1\Enum\Sparte;
use Conuti\BO4E\v1\Enum\Speicherart;
use Conuti\BO4E\v1\Enum\TechnischeRessourceArt;
use Conuti\BO4E\v1\Enum\Verbrauchsart;
use Conuti\BO4E\v1\Enum\Waermenutzung;

class TechnischeRessource
{
    public function __construct(
        readonly BOTyp $boTyp,
        readonly string $versionStruktur,
        readonly ?string $ressourcenId = null,
        readonly ?Sparte $sparte = null,
        readonly ?Lokationszuordnung $lokationszuordnung = null,
        readonly ?string $referenzMesslokation = null,
        readonly ?string $referenzMarktlokation = null,
        readonly ?string $referenzNetzlokation = null,
        readonly ?string $referenzSteuerbareRessource = null,
        readonly ?Nennleistung $nennleistung = null,
        readonly ?float $speicherkapazitaet = null,
        readonly ?Verbrauchsart $verbrauchsart = null,
        readonly ?Waermenutzung $waermenutzung = null,
        readonly ?ArtEmobilitaet $artEMobilitaet = null,
        readonly ?Erzeugungsart $erzeugungsart = null,
        readonly ?Speicherart $speicherart = null,
        readonly ?bool $enwg = null,
        readonly ?Inbetriebsetzung $inbetriebsetzungsdatum = null,
        readonly ?RessourceWechselmoeglichkeit $einordnung = null,
        readonly ?bool $weitereEinrichtung = null,
        readonly ?TechnischeRessourceArt $art = null,
    ) {
    }
}
