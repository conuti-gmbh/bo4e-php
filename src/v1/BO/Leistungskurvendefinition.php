<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Leistungskurve;
use Conuti\BO4E\v1\Enum\BOTyp;
use Conuti\BO4E\v1\Enum\DefinitionenNotwendigkeit;
use DateTime;

class Leistungskurvendefinition
{
    public function __construct(
        readonly BOTyp $boTyp = BOTyp::LEISTUNGSKURVENDEFINITION,
        readonly string $versionStruktur = "1",
        readonly ?DateTime $beginndatum = null,
        readonly ?DateTime $endedatum = null,
        readonly ?DateTime $version = null,
        readonly ?string $code = null,
        readonly ?DefinitionenNotwendigkeit $notwendigkeit = null,
        /** @var Leistungskurve[] */
        readonly array $leistungskurven = [],
    ) {
    }
}
