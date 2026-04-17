<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

use Conuti\BO4E\v1\Bo\Marktlokation;

class Angebotsteil
{
    public function __construct(
        readonly ?string $anfrageSubreferenz = null,
        readonly ?Menge $gesamtmengeangebotsteil = null,
        readonly ?Betrag $gesamtkostenangebotsteil = null,
        readonly ?Zeitraum $lieferzeitraum = null,
        readonly ?Katalogverweis $verweisKatalognummer = null,
        /** @var ?Marktlokation[] */
        readonly ?array $lieferstellenangebotsteil = null,
        /** @var ?Angebotsposition[] */
        readonly ?array $positionen = null,
    ) {
    }
}
