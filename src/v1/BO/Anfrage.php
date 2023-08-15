<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\Enum\Anfragekategorie;
use Conuti\BO4E\v1\Enum\Anfragetyp;

class Anfrage
{
    public function __construct(
        readonly string $boTyp,
        readonly string $versionStruktur,
        readonly ?string $lokationsId,
        readonly ?Anfragetyp $anfragetyp,
        readonly ?string $anfragereferenz,
        readonly ?string $allgemeineInformationen,
        readonly ?Anfragekategorie $anfragekategorie
    ) {
    }
}
