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
        public string $boTyp,
        public string $versionStruktur,
        public ?DateTime $beginndatum,
        public ?DateTime $endedatum,
        public ?DateTime $version,
        public ?DefinitionenNotwendigkeit $notwendigkeit,
        /** @var Zaehlzeit[] */
        public array $zaehlzeit = [],
        /** @var Zaehlzeitregister[] */
        public array $zaehlzeitregister = [],
        /** @var AusgerollteZaehlzeit[] */
        public array $ausgerollteZaehlzeiten = []
    ) {
    }
}
