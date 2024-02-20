<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\AusgerollteZaehlzeit;
use Conuti\BO4E\v1\COM\Zaehlzeit;
use Conuti\BO4E\v1\COM\Zaehlzeitregister;
use Conuti\BO4E\v1\Enum\DefinitionenNotwendigkeit;
use DateTime;

class Zaehlzeitdefinition
{
    public function __construct(
        readonly string $boTyp,
        readonly string $versionStruktur,
        readonly ?DateTime $beginndatum,
        readonly ?DateTime $endedatum,
        readonly ?DateTime $version,
        readonly ?DefinitionenNotwendigkeit $notwendigkeit,
        readonly ?string $versionsangabe,
        /** @var Zaehlzeit[] */
        readonly array $zaehlzeiten = [],
        /** @var Zaehlzeitregister[] */
        readonly array $zaehlzeitregister = [],
        /** @var AusgerollteZaehlzeit[] */
        readonly array $ausgerollteZaehlzeiten = []
    ) {
    }
}
