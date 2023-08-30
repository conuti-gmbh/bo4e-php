<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\BO\Marktlokation;

class Angebotsteil
{
    public function __construct(
        public ?string $anfrageSubreferenz,
        public ?Menge $gesamtmengeangebotsteil,
        public ?Betrag $gesamtkostenangebotsteil,
        public ?Zeitraum $lieferzeitraum,
        public ?Katalogverweis $verweisKatalognummer,
        /** @var array<Marktlokation> $lieferstellenangebotsteil*/
        public array $lieferstellenangebotsteil = [],
        /** @var array<Angebotsposition> $positionen*/
        public array $positionen = [],
    ) {
    }
}
