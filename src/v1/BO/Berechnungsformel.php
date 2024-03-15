<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Rechenschritt;
use Conuti\BO4E\v1\COM\Verwendungszweck;
use Conuti\BO4E\v1\Enum\BerechnungsformelNotwendigkeit;
use Conuti\BO4E\v1\Enum\BOTyp;
use Conuti\BO4E\v1\Enum\Energierichtung;

class Berechnungsformel
{
    public function __construct(
        readonly BOTyp $boTyp = BOTyp::BERECHNUNGSFORMEL,
        readonly string $versionStruktur = "1",
        readonly ?string $beginndatum = null,
        readonly ?BerechnungsformelNotwendigkeit $notwendigkeit = null,
        readonly ?Energierichtung $lieferrichtung = null,
        readonly ?int $rechenschrittId = null,
        readonly ?Rechenschritt $rechenschritt = null,
        /** @var Rechenschritt[] */
        readonly array $rechenschritte = [],
        /** @var Verwendungszweck[] */
        readonly array $verwendungszweck = [],
    ) {
    }
}
