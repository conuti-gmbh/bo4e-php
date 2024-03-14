<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\Enum\Abonnement;
use Conuti\BO4E\v1\Enum\Anfragekategorie;
use Conuti\BO4E\v1\Enum\Anfragetyp;
use Conuti\BO4E\v1\Enum\Energierichtung;

class Anfrage
{
    public function __construct(
        readonly string $boTyp,
        readonly string $versionStruktur,
        readonly ?string $lokationsId = null,
        readonly ?Anfragetyp $anfragetyp = null,
        readonly ?Abonnement $abonnement = null,
        readonly ?string $anfragereferenz = null,
        readonly ?string $allgemeineInformationen = null,
        readonly ?Anfragekategorie $anfragekategorie = null,
        readonly ?Energierichtung $energierichtung = null,
        readonly ?string $gueltigkeitszeitspanne = null,
        readonly ?string $gueltigAb = null,
    ) {
    }
}
