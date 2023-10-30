<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Leistungskurve;
use DateTime;

class Leistungskurvendefinition
{
    public function __construct(
        readonly string $boTyp,
        readonly string $versionStruktur,
        readonly ?DateTime $beginndatum,
        readonly ?DateTime $endedatum,
        readonly ?DateTime $version,
        /** @var Leistungskurve[] */
        readonly array $leistungskurven = [],
    ) {
    }
}
