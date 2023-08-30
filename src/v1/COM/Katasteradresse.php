<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

/**
 * Dient der Adressierung über die Liegenschaftsinformation.
 */
class Katasteradresse
{
    public function __construct(
        public ?string $gemarkung_flur,
        public ?string $flurstueck,
    ) {
    }
}
