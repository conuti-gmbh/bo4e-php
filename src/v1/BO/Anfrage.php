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
        readonly ?string $lokationsId,
        readonly ?Anfragetyp $anfragetyp,
        readonly ?Abonnement $abonnement,
        readonly ?string $anfragereferenz,
        readonly ?string $allgemeineInformationen,
        readonly ?Anfragekategorie $anfragekategorie,
        readonly ?Energierichtung $energierichtung
    ) {
    }
}
