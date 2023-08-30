<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;


class PositionsAufAbschlag
{
    public function __construct(
        public ?string $bezeichnung,
        public ?string $beschreibung,
        public ?string $aufAbschlagstyp,
        public ?float $aufAbschlagswert,
        public ?string $aufAbschlagswaehrung
    ) {
    }
}
