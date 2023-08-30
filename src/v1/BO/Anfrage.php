<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\Enum\Anfragekategorie;
use Conuti\BO4E\v1\Enum\Anfragetyp;

class Anfrage
{
    public function __construct(
        public string $boTyp,
        public string $versionStruktur,
        public ?string $lokationsId,
        public ?Anfragetyp $anfragetyp,
        public ?string $anfragereferenz,
        public ?string $allgemeineInformationen,
        public ?Anfragekategorie $anfragekategorie
    ) {
    }
}
