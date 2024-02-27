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
        readonly ?DateTime $beginndatum = null,
        readonly ?DateTime $endedatum = null,
        readonly ?DateTime $version = null,
        readonly ?string $code = null,
        /** @var Leistungskurve[] */
        readonly array $leistungskurven = [],
    ) {
    }
}
