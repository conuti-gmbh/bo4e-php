<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Bo;

use Conuti\BO4E\v1\Enum\BOTyp;
use DateTime;
use Conuti\BO4E\v1\Enum\BerechnungsformelNotwendigkeit;
use Conuti\BO4E\v1\Enum\Energierichtung;
use Conuti\BO4E\v1\Com\Rechenschritt;
use Conuti\BO4E\v1\Com\Verwendungszweck;
use Conuti\BO4E\v1\Com\Zeitraum;

class Berechnungsformel
{
    public function __construct(
        readonly BOTyp $boTyp = BOTyp::BERECHNUNGSFORMEL,
        readonly string $versionStruktur = '1',
        readonly ?DateTime $beginndatum = null,
        readonly ?BerechnungsformelNotwendigkeit $notwendigkeit = null,
        readonly ?Energierichtung $lieferrichtung = null,
        readonly ?int $rechenschrittId = null,
        readonly ?Rechenschritt $rechenschritt = null,
        /** @var Rechenschritt[] */
        readonly array $rechenschritte = [],
        /** @var Verwendungszweck[] */
        readonly array $verwendungszweck = [],
        readonly ?Zeitraum $gueltigkeitszeitraum = null,
    ) {
    }
}
