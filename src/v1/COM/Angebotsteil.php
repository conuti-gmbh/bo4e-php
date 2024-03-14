<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\BO\Marktlokation;

class Angebotsteil
{
    public function __construct(
        readonly ?string $anfrageSubreferenz = null,
        readonly ?Menge $gesamtmengeangebotsteil = null,
        readonly ?Betrag $gesamtkostenangebotsteil = null,
        readonly ?Zeitraum $lieferzeitraum = null,
        readonly ?Katalogverweis $verweisKatalognummer = null,
        /** @var array<Marktlokation> $lieferstellenangebotsteil */
        readonly array $lieferstellenangebotsteil = [],
        /** @var array<Angebotsposition> $positionen */
        readonly array $positionen = [],
    ) {
    }
}
