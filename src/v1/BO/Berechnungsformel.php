<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Rechenschritt;
use Conuti\BO4E\v1\COM\Verwendungszweck;
use Conuti\BO4E\v1\Enum\BerechnungsformelNotwendigkeit;
use Conuti\BO4E\v1\Enum\Energierichtung;

class Berechnungsformel
{
    public function __construct(
        readonly string $boTyp,
        readonly string $versionStruktur,
        readonly ?string $beginndatum,
        readonly ?BerechnungsformelNotwendigkeit $notwendigkeit,
        readonly ?Energierichtung $lieferrichtung,
        readonly ?int $rechenschrittId,
        readonly ?Rechenschritt $rechenschritt,
        /** @var Rechenschritt[] */
        readonly array $rechenschritte = [],
        /** @var Verwendungszweck[] */
        readonly array $verwendungszweck = []
    ) {
    }
}
