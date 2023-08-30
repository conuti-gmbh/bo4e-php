<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;


class Anfrage
{
    public function __construct(
        public string $boTyp,
        public string $versionStruktur,
        public ?string $lokationsId,
        public ?string $anfragetyp,
        public ?string $anfragereferenz,
        public ?string $allgemeineInformationen,
        public ?string $anfragekategorie
    ) {
    }
}
