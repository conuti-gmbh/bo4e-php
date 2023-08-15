<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\BO\Marktlokation;

class Angebotsteil
{
    public function __construct(
        readonly ?string $anfrageSubreferenz,
        readonly ?Menge $gesamtmengeangebotsteil,
        readonly ?Betrag $gesamtkostenangebotsteil,
        readonly ?Zeitraum $lieferzeitraum,
        readonly ?Katalogverweis $verweisKatalognummer,
        /** @var array<Marktlokation> $lieferstellenangebotsteil*/
        readonly array $lieferstellenangebotsteil = [],
        /** @var array<Angebotsposition> $positionen*/
        readonly array $positionen = [],
    ) {
    }
}
